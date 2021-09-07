<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\WaiterRequest as StoreRequest;
use App\Http\Requests\WaiterRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;

/**
 * Class WaiterCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class WaiterCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Waiter');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/waiter');
        $this->crud->setEntityNameStrings('waiter', 'waiters');
      

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
        $userReseller  = $user->can('adauga-restaurant');

        $restaurants = collect([]);
        if ($allRestaurants) {
            $restaurants = Restaurant::get();
            $multipleRestaurants = true;
        } else {
            $restaurants = $user->restaurants()->get();
            $restaurants_ids = $user->restaurants()->get('id');
            $multipleRestaurants = $restaurants->count() > 1;
        }

        $restaurantsArray = $restaurants->keyBy('id')->pluck('name', 'id')->toArray();
        if($userReseller){
          $this->crud->addField([
            'name' => 'id_reseller',
            'type' => 'hidden',
            'value'=>$user->id,
          ]);
           $this->crud->addField([
                'name'      => 'restaurant_id',
                'label'     => 'Restaurant',
                'type'      => 'select2_from_array',
                'options' => \App\Models\Restaurant::where('id_reseller',$user->id)->get()->pluck('name','id'),
            ], 'both');
        }else{
           $this->crud->addField([
            'name'  => 'id_reseller',
            'type'  => 'hidden',
            'value' => $user->id_reseller,
          ]);
           $this->crud->addField([
              'name'      => 'restaurant_id',
              'label'     => 'Restaurant',
              'type'      => 'select_from_array',
              'options'   => $restaurantsArray,
          ]);
        }
        $this->crud->addColumn([
            'label' => "Restaurant", 
            'type' => "select",
            'name' => 'restaurant_id', 
            'entity' => 'restaurant', 
            'attribute' => "name", 
            'model' => "App\Models\Restaurant", 
        ]);
        $this->crud->addColumn([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
        ]);


        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField([
            'name' => 'email',
            'type' => 'email',
            'label' => "Email"
        ]);
        $this->crud->addField([
			'name' => 'password',
			'label' => 'Password',
			'type' => 'password',
			'hint' => 'Enter password if want to change it',
        ]);
       
        $this->crud->addField([
			'name' => 'verified',
			'label' => 'Block access to this waiter?',
            'type' => 'checkbox',
            'hint' => 'If checked, this waiter can`t login the app.'
        ]);
        
        $this->crud->addFilter([
            'name'  => 'restaurant_id',
            'type'  => 'select2',
            'label' => 'Restaurant'
          ], function () use($restaurantsArray) {
                return $restaurantsArray;
          }, function ($value) { // if the filter is active
                $this->crud->addClause('where', 'restaurant_id', $value);
          });

          $crudAllowed = ['list'];
          if ($allRestaurants) {
              array_push($crudAllowed, 'create', 'update', 'delete');
          } else {
            if ($user->can('create', \App\Models\Restaurant::class)) {
                array_push($crudAllowed, 'create');
            }
            if (in_array($this->crud->getActionMethod(), ['create', 'edit', 'update', 'delete'])) {
                if ($user->can('update', \App\Models\Restaurant::find($this->crud->getCurrentEntryId()))) {
                    array_push($crudAllowed, 'update', 'delete');
                } else{
                  array_push($crudAllowed, 'create', 'update', 'reorder', 'delete');
                }
            } else {
                array_push($crudAllowed, 'update', 'delete');
            }
          }
          $this->crud->denyAccess(['create', 'update', 'reorder', 'delete']);
          $this->crud->allowAccess($crudAllowed);

        // add asterisk for fields that are required in WaiterRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        if (!$allRestaurants) {
          if($userReseller){
              $this->crud->addClause('where', 'id_reseller', $user->id);
            }else{
              $this->crud->addClause('whereIn', 'restaurant_id', $restaurants_ids);
            }
        }
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
