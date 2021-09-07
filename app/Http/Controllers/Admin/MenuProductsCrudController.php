<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MenuProductsRequest as StoreRequest;
use App\Http\Requests\MenuProductsRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\DigitalCategories;

/**
 * Class MenuProductsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MenuProductsCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\MenuProducts');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/menu_products');
        $this->crud->setEntityNameStrings('menu_products', 'menu_products');
      
        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
      
        $restaurants = collect([]);
        $categories = collect([]);
        if ($allRestaurants) {
            $restaurants = Restaurant::get();
            $categories = DigitalCategories::get();
            $multipleRestaurants = true;
        } else {
            $restaurants = $user->restaurants()->get();
            $categories = DigitalCategories::get();
            $availableRestaurants = $restaurants->toArray();
            $foundedCategories = [];
            foreach($categories as &$category){
              foreach($availableRestaurants as $restaurant){
                if($category['id_restaurant'] == $restaurant['id']){
                  array_push($foundedCategories,$category);
                }
               }
              }
          $categoriesArray = $categories->keyBy('id')->pluck('category', 'id')->toArray();
        }
        $restaurantsArray = $restaurants->keyBy('id')->pluck('name', 'id')->toArray();
        $categoriesArray = $categories->keyBy('id')->pluck('category', 'id')->toArray();
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
      $id_cat = request()->id_category;
      if($id_cat == null){
        $menu = Menu::where('id_restaurant', request()->id_restaurant)->first();
        if($menu){
          $id_cat = $menu->id;
        }
      }

        // TODO: remove setFromDb() and manually define Fields and Columns
      if(request()->layout ==0){
        
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name','attributes' => ['required' => 'required']]);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
        $this->crud->addField(['name' => 'images', 'type' => 'upload_multiple', 'label' => 'Images','upload'=>true,'disk'=>'public']);
        $this->crud->addField(['name' => 'price', 'type' => 'text', 'label' => 'Price','attributes' => ['required' => 'required']]);
        $this->crud->addField(['name' => 'calories', 'type' => 'text', 'label' => 'Calories']);
        $this->crud->addField(['name' => 'weight', 'type' => 'text', 'label' => 'Weight']);
        $this->crud->addField(['name' => 'milliliters', 'type' => 'text', 'label' => 'Milliliters']);
        $this->crud->addField(['name' => 'id_category', 'type' => 'hidden', 'label' => 'restaurant','default'=>$id_cat]);
        $this->crud->addField([
          'name' => 'custom_field',
          'label' => 'Custom field',
          'type' => 'table',
          'entity_singular' => 'option', // used on the "Add X" button
          'columns' => [
              'name' => 'Name',
              'description' => 'Description',
          ],
          'max' => 1000, // maximum rows allowed in the table
          'min' => 0, // minimum rows allowed in the table
        ]);
        
      }elseif(request()->layout ==1){
        
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name','attributes' => ['required' => 'required']]);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
        $this->crud->addField(['name' => 'images', 'type' => 'upload_multiple', 'label' => 'Images','upload'=>true,'disk'=>'public']);
        $this->crud->addField(['name' => 'price', 'type' => 'text', 'label' => 'Price','attributes' => ['required' => 'required']]);
        $this->crud->addField(['name' => 'id_category', 'type' => 'hidden', 'label' => 'restaurant','default'=>$id_cat]);
        $this->crud->addField([
          'name' => 'custom_field',
          'label' => 'Custom field',
          'type' => 'table',
          'entity_singular' => 'option', // used on the "Add X" button
          'columns' => [
              'name' => 'Name',
              'description' => 'Description',
          ],
          'max' => 1000, // maximum rows allowed in the table
          'min' => 0, // minimum rows allowed in the table
        ]);
        
      }else{
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
         $this->crud->addField([
          'label' => "Image",
          'name' => "image",
          'type' => 'image',
          'upload' => true,
           'multiple' => false,
          'crop' => true, // set to true to allow cropping, false to disable
          'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
          'disk' => 'public', // in case you need to show images from a different disk
          // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
        $this->crud->addField(['name' => 'id_category', 'type' => 'hidden', 'label' => 'restaurant','default'=>$id_cat]);
      }
      
      $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
      $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Description']);

        // add asterisk for fields that are required in MenuProductsRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        if($id_cat){
          $this->crud->addClause('where', 'id_category', $id_cat);
        }
          // Reorder
          $this->crud->orderBy('lft', 'ASC');
          $this->crud->enableReorder('name', 1);
          $this->crud->allowAccess('reorder');
        $this->crud->setListView('vendor.backpack.crud.list_menus_products');
        $this->crud->setEditView('vendor.backpack.crud.edit_menu_products');
        $this->crud->setCreateView('vendor.backpack.crud.add_menu_products');
   
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        if($request->save_action == 'save_and_new'){
          $replaceble = $request->input('http_referrer');
          if(strpos($replaceble, 'edit') !== false){
            $new_replaceble = explode("/", $replaceble);
            unset($new_replaceble[5]);
            $new_replaceble[6] = str_replace("edit", "create", $new_replaceble[6]);
            $reconstruct = $new_replaceble[0].'/';
            foreach($new_replaceble as $key => $item){
              if($key > 1){
                $reconstruct .= '/'.$item;
              }
            }
           $replaceble = $reconstruct;
          }
          if(strpos($replaceble, 'create') === false){
            $replaceble = str_replace("?", "/create?", $request->input('http_referrer'));
          }
          return \Redirect::to($replaceble);
        } else{
          $replaceble = str_replace("/create?", "?", $request->input('http_referrer'));
          return \Redirect::to($replaceble);
        }
//         return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
//       dd($request->all());
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
      
       if($request->save_action == 'save_and_new'){
          $replaceble = $request->input('http_referrer');
          if(strpos($replaceble, 'edit') !== false){
            $new_replaceble = explode("/", $replaceble);
            unset($new_replaceble[5]);
            $new_replaceble[6] = str_replace("edit", "create", $new_replaceble[6]);
            $reconstruct = $new_replaceble[0].'/';
            foreach($new_replaceble as $key => $item){
              if($key > 1){
                $reconstruct .= '/'.$item;
              }
            }
           $replaceble = $reconstruct;
          }
          if(strpos($replaceble, 'create') === false){
            $replaceble = str_replace("?", "/create?", $request->input('http_referrer'));
          }
          return \Redirect::to($replaceble);
        } else{
          $replaceble = str_replace("/create?", "?", $request->input('http_referrer'));
          return \Redirect::to($replaceble);
        }
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
