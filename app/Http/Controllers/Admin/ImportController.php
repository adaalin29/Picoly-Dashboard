<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\MenuProducts;
use App\Models\DigitalCategories;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
  public function import_menu(Request $request){
    $form_data = $request->all();
    if(!array_key_exists('restaurant_id', $form_data) || $form_data['restaurant_id'] == null){
      return [
        'success' => false,
        'msg'     => 'Selecteaza un restaurant pentru a importa meniul CSV!',
      ];
    }
    $document = null;
    if($request->file('import_file')){ 
       $document = $request->file('import_file');
    }
    if($document == null){
      return [
        'success' => false,
        'msg'     => 'Selecteaza fisierul cu format .csv pentru a-l importa!',
      ];
    } 
    
    $menus_file = $this->csvToArray($document);
//     digital_categories, menus, menu_products
//     digital_categories.category, 
//     menus.layout, menus.name as menu_title, menus.description as menu_description, 
//     menus.image as menu_image, menus.digital_menu, menus.menu_url, menus.promotion, 
//     menus.start_date, menus.end_date, menu_products.name as product_name, 
//     menu_products.description as product_description, menu_products.images as product_images, 
//     menu_products.calories, menu_products.weight, menu_products.milliliters, 
//     menu_products.price, menu_products.custom_field
//     inserez meniu>digital_categories>menu_products
    $digital_categories = [];
    $all_products = [];
    $menus = [];
    $menu_products = [];
    $date_created = date("Y-m-d H:i:s");
    $counter_products = 0;
    $counter_menus = 0;
    $counter_categories = 0;
    $test = 0;
    if(count($menus_file) > 0){
      foreach($menus_file as $menu){
        $title = str_replace("\x19", "'", $menu['menu_title']);
        $desc = str_replace("\x19", "'", $menu['menu_description']);
        $arr_for_push = [
            'created_at' => $date_created,
            'updated_at' => $date_created,
            'id_restaurant' => $form_data['restaurant_id'],
            'layout' => $menu['layout'],
            'name' => $menu['menu_title'] != null && strlen($menu['menu_title']) > 0 ? str_replace("\x1A", "'", $title) : '{"ro":"Fara titlu"}',
            'description' => $menu['menu_description'] != null && strlen($menu['menu_description']) > 0 ? str_replace("\x1A", "'", $desc) : '{"ro":"Fara descriere"}',
            'image' => $menu['menu_image'],
            'digital_menu' => $menu['digital_menu'],
            'menu_url' => $menu['menu_url'],
            'promotion' => $menu['promotion'],
            'start_date' => $menu['start_date'],
            'end_date' => $menu['end_date'],
            'digital_categories' => [],
        ];
        if(!in_array($arr_for_push, $menus)){
          array_push($menus, $arr_for_push);
        }
        $arr_dig_cat =  [
            'created_at' => $date_created,
            'updated_at' => $date_created,
            'category'   => $menu['category'],
            'what_menu'   => $menu['menu_title'] != null && strlen($menu['menu_title']) > 0 ? str_replace("\x1A", "'", $title) : '{"ro":"Fara titlu"}',
            'id_restaurant'    => $form_data['restaurant_id'],
            'id_menu'    => null, // il adaug dupa ce fac foreach prin toate meniurile
            'products'  => [],
         ];
         if(!in_array($arr_dig_cat, $digital_categories)){
          array_push($digital_categories, $arr_dig_cat);
         }
        // create products
        $title_prod = str_replace("\x19", "'", $menu['product_name']);
        $desc_prod = str_replace("\x19", "'", $menu['product_description']);
        $arr_product = [
            'name' => $menu['product_name'] != null && strlen($menu['product_name']) > 0 ? str_replace("\x1A", "'", $title_prod) : '{"ro":"Fara titlu"}',
            'description' => $menu['product_description'] != null && strlen($menu['product_description']) > 0 ? str_replace("\x1A", "'", $desc_prod) : '{"ro":"Fara descriere"}',
            'images' => str_replace(' [', '[', $menu['product_images']),
            'id_category' => $menu['category'], //fac update dupa ce inserez dig_cats
            'calories' => $menu['calories'],
            'weight' => $menu['weight'],
            'price' => $menu['price'],
            'milliliters' => $menu['milliliters'],
            'created_at' => $date_created,
            'updated_at' => $date_created,
            'external_id' => $menu['external_id'],
            'custom_field' => $menu['custom_field'], // concat cu extended
        ];
        if(!in_array($arr_product, $menu_products)){
          array_push($menu_products, $arr_product);
          array_push($all_products, $arr_product);
        }
      }
      foreach($menus as &$menu){
        foreach($digital_categories as &$digital_category){
          foreach($menu_products as &$product){
             if($product['id_category'] == $digital_category['category']){
              array_push($digital_category['products'], $product); 
             }
          }
          if($digital_category['what_menu'] == $menu['name']){
           array_push($menu['digital_categories'], $digital_category); 
          }
        }
      }
      $counter_update_menu = 0;
      $counter_update_categories = 0;
      $counter_update_products = 0;
      foreach($menus as &$menu){
        $temp_categories = $menu['digital_categories'];
        $menu['external_id'] = $temp_categories[0]['products'][0]['external_id'];
        unset($menu['digital_categories']);
        $ins_menu = DB::table('menus')->where(['name' => $menu['name'], 'id_restaurant' => $form_data['restaurant_id'], 'external_id' => $menu['external_id']])->first();
        if($ins_menu != null){
          DB::table('menus')->where('id', $ins_menu->id)->update($menu);
          $id_menu = $ins_menu->id;
          $counter_update_menu++;
        } else{
          $id_menu = Menu::insertGetId($menu);
          $counter_menus++;
        }
        foreach($temp_categories as &$digital_category){
          $temp_products = $digital_category['products'];
          unset($digital_category['products']);
          unset($digital_category['what_menu']);
          $digital_category['id_menu'] = $id_menu;
          $ins_dig_cat = DigitalCategories::where(['category' => $digital_category['category'], 'id_restaurant' => $form_data['restaurant_id'], 'id_menu' => $id_menu])->first();
          if($ins_dig_cat != null){
            DB::table('digital_categories')->where('id', $ins_dig_cat->id)->update($digital_category);
            $id_dig_cat = $ins_dig_cat->id;
            $counter_update_categories++;
          } else{
            $id_dig_cat = DigitalCategories::insertGetId($digital_category);
            $counter_categories++;
          }
          foreach($temp_products as &$product){
              $product['id_category'] = $id_dig_cat;
              $db_product = MenuProducts::where(['external_id' => $product['external_id'], 'id_category' => $id_dig_cat])->first();
              if($db_product != null){
                DB::table('menu_products')->where('id', $db_product->id)->update($product);
                $counter_update_products++;
              } else{
                MenuProducts::insert($product);
                $counter_products++;
              }
          }
        }
      }
//       $products = DB::select(DB::raw("SELECT * from menu_products"));
//       foreach($products as &$product){
//           $prod_name = str_replace("\x19", "'", $product->name);
//           $prod_name = str_replace("\x1A", "'", $prod_name);
//           MenuProducts::where('id', $product->id)->update(['name' => $prod_name]);
//       }
      return [
        'success' => true,
        'msg'     => 'Successfully uploaded',
      ];
    }
  }
  public function csvToArray($filename = '', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
        {
            if (!$header){
              $header = $row;
            }
            else{
              if(count($header) != count($row)){
                $header[count($header) + 1] = 'custom_field_extended';
              }
              $data[] = array_combine($header, $row);
            }
        }
        fclose($handle);
    }

    return $data;
  }
}