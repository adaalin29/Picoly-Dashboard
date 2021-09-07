<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DigitalCategoriesRequest as StoreRequest;
use App\Http\Requests\DigitalCategoriesRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
use App\Models\Menu;
use App\Models\DigitalCategories;

/**
 * Class DigitalCategoriesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DigitalCategoriesCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\DigitalCategories');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/digital_categories');
        $this->crud->setEntityNameStrings('digital category', 'Categorie meniu digital');

        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
        $userReseller  = $user->can('adauga-restaurant');
      
       
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->addField(['name' => 'category', 'type' => 'text', 'label' => 'Categorie']);
        $this->crud->addField(['name' => 'id_restaurant', 'type' => 'hidden', 'label' => 'restaurant','default'=>request()->id_restaurant]);
        $this->crud->addField(['name' => 'id_menu', 'type' => 'hidden', 'label' => 'restaurant','default'=>request()->id_menu]);
        $this->crud->addColumn(['name' => 'category', 'type' => 'text', 'label' => 'Categorie']);
      
        // add asterisk for fields that are required in DigitalCategoriesRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
      
        $this->crud->addButtonFromView('line', 'add_products', 'add_products', 'end');
      
        $restaurant_id = 0;
        $owner_id = 0;
        if (!$allRestaurants) {
          $owner_id = $user->id;
        }
        if(request()->id_restaurant && request()->id_menu){
          if($userReseller){
            $restaurant = Restaurant::where('id', request()->id_restaurant)->when($owner_id, function ($query, $owner_id) {
            $query->where('id_reseller', $owner_id);
            })->first();
          }else{
            $restaurant = Restaurant::where('id', request()->id_restaurant)->when($owner_id, function ($query, $owner_id) {
            $query->where('owner_id', $owner_id);
            })->first();
          }
          $menu = Menu::where('id', request()->id_menu)->first();
          if ($restaurant) $restaurant_id = $restaurant->id;
          if ($menu) $id_menu = $menu->id;
         
        }
        if ($allRestaurants) {
          if ($restaurant_id) $this->crud->addClause('where', 'id_restaurant', $restaurant_id);
        } else {
          if(request()->id_restaurant && request()->id_menu){
            $this->crud->addClause('where', 'id_restaurant', $restaurant_id);
            $this->crud->addClause('where', 'id_menu', $id_menu);
            
          } else{
            $this->crud->addClause('where', 'id_restaurant', $restaurant_id);
          }
        }
          // Reorder
          $this->crud->orderBy('lft', 'ASC');
          $this->crud->enableReorder('category', 1);
          $this->crud->allowAccess('reorder');
        $this->crud->setListView('vendor.backpack.crud.list_digital_categories');
        $this->crud->setEditView('vendor.backpack.crud.edit_digital_categories');
        $this->crud->setCreateView('vendor.backpack.crud.add_digital_categories');
    }
 

    public function store(StoreRequest $request)
    { 
        if($this->checkCategory($request, null)){
           \Alert::error('Exista deja o categorie cu acest titlu')->flash();
          return redirect()->back();
        }
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
      
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

    public function update(UpdateRequest $request)
    {
        if($this->checkCategory($request, $request->id)){
           \Alert::error('Exista deja o categorie cu acest titlu')->flash();
          return redirect()->back();
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
      
      if($request->save_action == 'save_and_new'){
          $replaceble = $request->input('http_referrer');
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
  
  public function checkCategory($request, $cat_id = null){
    if($cat_id){
      $digitalCategories = DigitalCategories::where([
          'id_restaurant' => $request->id_restaurant,
        ])->where('id', '!=', $cat_id)->get();
    } else{
      $digitalCategories = DigitalCategories::where([
          'id_restaurant' => $request->id_restaurant,
        ])->get();
    }
    if($digitalCategories){
      $digitalCategories = $digitalCategories->toArray();
      foreach($digitalCategories as $cat){
        if(array_key_exists($request->locale, $cat['category'])){
          $current_cat = $cat['category'][$request->locale];
        } else{
          $lang = array_key_first($cat['category']);
          $current_cat = $cat['category'][$lang];
        }
          
        if($current_cat == $request->category){
          return true;
        }
      }
    }
    return false;
  }
}
