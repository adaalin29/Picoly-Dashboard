<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\MenuRequest as StoreRequest;
use App\Http\Requests\MenuRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
use DB;
/**
 * Class MenuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class MenuCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Menu');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/menus');
        $this->crud->setEntityNameStrings('menu', 'menus');
        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
        $userReseller  = $user->can('adauga-restaurant');
      
        $restaurant_id_uncompleted = request()->id_restaurant;
        if(!request()->id_restaurant && !$allRestaurants){
          $restaurant_id_uncompleted = Restaurant::where('owner_id', $user->id)->first();
          if($restaurant_id_uncompleted){
            $restaurant_id_uncompleted = $restaurant_id_uncompleted->id;
          } else{
            $restaurant_id_uncompleted = Restaurant::where('id_reseller', $user->id)->first();
            $restaurant_id_uncompleted = $restaurant_id_uncompleted->id;
          }
        }
      
        $restaurants = collect([]);
        if ($allRestaurants) {
            $restaurants = Restaurant::get();
            $multipleRestaurants = true;
        }elseif($userReseller){
          $restaurants = Restaurant::where('id_reseller', $user->id)->get();
           $this->crud->addField([
            'name'  => 'id_reseller',
            'type'  => 'hidden',
            'value' => $user->id,
          ]);
        }
        else {
//             DB::connection()->enableQueryLog();
            $restaurants = $user->restaurants()->get();
            $multipleRestaurants = $restaurants->count() > 1;
            $this->crud->addField([
              'name'  => 'id_reseller',
              'type'  => 'hidden',
              'value' => $user->id_reseller,
            ]);
        }
       
        $restaurantsArray = $restaurants->keyBy('id')->pluck('name', 'id')->toArray();
      

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->addField(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => 'Description']);
        $this->crud->addField([
          'label' => "Image",
          'name' => "image",
          'type' => 'image',
          'upload' => true,
          'crop' => true, // set to true to allow cropping, false to disable
          'aspect_ratio' => 0, // ommit or set to 0 to allow any aspect ratio
          'disk' => 'public', // in case you need to show images from a different disk
          // 'prefix' => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
         $this->crud->addField(['name' => 'id_restaurant', 'type' => 'hidden', 'label' => 'restaurant','default'=>$restaurant_id_uncompleted]);
         $this->crud->addField([
          'name'  => 'digital_menu',
          'label' => 'Load menu from url',
          'type'  => 'checkbox',
           'attributes'=>[
              'class' => 'digital_menu',
           ],
         ]);
      
         $this->crud->addField([
          'name'  => 'menu_url',
          'label' => 'Menu url',
          'type'  => 'text',
           'attributes'=>[
              'class' => 'menu_url',
           ],
        ]);
        $this->crud->addField([
          'name'  => 'promotion',
          'label' => 'Promotional order',
          'type'  => 'checkbox',
           'attributes'=>[
              'class' => 'promotional_menu',
           ],
         ]);
        $this->crud->addField([
            'name' => 'event_date_range', // a unique name for this field
            'start_name' => 'start_date', // the db column that holds the start_date
            'end_name' => 'end_date', // the db column that holds the end_date
            'label' => 'Event Date Range',
            'type' => 'date_range',
            // OPTIONALS
            'start_default' => '2021-01-01 00:00', // default value for start_date
            'end_default' => '2021-01-02 00:00', // default value for end_date
            'date_range_options' => [ // options sent to daterangepicker.js
                'timePicker' => true,
                'locale' => ['format' => 'DD/MM/YYYY HH:mm']
            ],
            'attributes'=>[
              'class' => 'form-control menu-date',
           ],
        ]);
      
        $this->crud->addField([
          'name'        => 'layout', // the name of the db column
          'label'       => 'Layout', // the input label
          'type'        => 'radiocustom',
          'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                        0 => "Products",
                        1 => "Services",
                        2=> 'Offers',
                    ],
        ]);
      
       $this->crud->addFilter([
            'name'  => 'id_restaurant',
            'type'  => 'select2',
            'label' => 'Restaurant'
          ], function () use($restaurantsArray) {
                return $restaurantsArray;
          }, function ($value) { // if the filter is active
                $this->crud->addClause('where', 'id_restaurant', $value);
                
          });
      
      $this->crud->addColumn(['name' => 'name', 'type' => 'text', 'label' => 'Name']);
      $this->crud->addColumn(['name' => 'description', 'type' => 'text', 'label' => 'Description']);
      $this->crud->addColumn([
          'name'        => 'layout', // the name of the db column
          'label'       => 'Layout', // the input label
          'type'        => 'radio',
          'options'     => [ // the key will be stored in the db, the value will be shown as label; 
                        0 => "Products",
                        1 => "Services",
                        2=> 'Offers',
                    ],
        ]);
        $this->crud->addButtonFromView('line', 'add_category', 'add_category', 'end');
      
        $restaurant_id = 0;
        $owner_id = 0;
        if (!$allRestaurants) {
          $owner_id = $user->id;
        }
        if(request()->id_restaurant){
          if($userReseller){
            $restaurant = Restaurant::where('id', request()->id_restaurant)->when($owner_id, function ($query, $owner_id) {
              $query->where('id_reseller', $owner_id);
            })->first();
            $this->crud->addClause('where', 'id_reseller', $user->id);
          }else{
            $restaurant = Restaurant::where('id', request()->id_restaurant)->when($owner_id, function ($query, $owner_id) {
              $query->where('owner_id', $owner_id);
            })->first();
          }
          if ($restaurant) $restaurant_id = $restaurant->id;
        }
        if ($allRestaurants) {
          if ($restaurant_id) $this->crud->addClause('where', 'id_restaurant', $restaurant_id);
        } else {
          $this->crud->addClause('where', 'id_restaurant', $restaurant_id);
        }
      
//       dd($restaurant->toArray());
        // add asterisk for fields that are required in MenuRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        $this->crud->enablePersistentTable();
        // Reorder
        $this->crud->orderBy('lft', 'ASC');
        $this->crud->enableReorder('name', 1);
        $this->crud->allowAccess('reorder');
        $this->crud->setListView('vendor.backpack.crud.list_menus');
        $this->crud->setEditView('vendor.backpack.crud.edit_menus');
        $this->crud->setCreateView('vendor.backpack.crud.add_menus');
    }

    public function store(StoreRequest $request)
    {
        $validated = $request->validate([
            'image' => 'required',
        ]);
      
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
}
