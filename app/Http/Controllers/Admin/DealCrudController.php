<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\DealRequest as StoreRequest;
use App\Http\Requests\DealRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
/**
 * Class DealCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DealCrudController extends CrudController
{
    public function setup()
    {
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
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Deal');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/deal');
        $this->crud->setEntityNameStrings('deal', 'deals');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns
      
        $this->crud->addColumn([
            'name' => 'image', // The db column name
            'label' => "Image", // Table column heading
            'type' => 'image',
            'disk' => 'public',
            'height' => '60px',
            'width' => '60px',
        ]);
        $this->crud->addColumn([
            'name' => 'title', // The db column name
            'label' => "Title", // Table column heading
        ]);
        $this->crud->addColumn([
            'name' => 'description', // The db column name
            'label' => "Description", // Table column heading
        ]);
       $this->crud->addField([
            'name' => 'id_category', // The db column name
            'label' => "category",
            'type' =>'hidden',
            'default'=>request()->id_category// Table column heading
        ]);
        $this->crud->addField([
            'name' => 'restaurant_id', // The db column name
            'label' => "restaurant id",
            'type' =>'hidden',
            'default'=>request()->restaurant_id// Table column heading
        ]);
        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => "Title"
        ]);
        $this->crud->addField([
            'name' => 'description',
            'type' => 'text',
            'label' => "Description"
        ]);
        $this->crud->addField([
            'name' => 'image',
            'type' => 'image',
            'disk' => 'public',
            'label' => "Image",
            'upload' => true,
             'crop' => true,
        ]);
        if($userReseller){
          $this->crud->addField([
            'name' => 'id_reseller',
            'type' => 'hidden',
            'default'=>$user['id'],
          ]);
        }

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
                    if ($this->crud->getCurrentEntry() && $user->can('update', \App\Models\Restaurant::find($this->crud->getCurrentEntry()->restaurant_id))) {
                        array_push($crudAllowed, 'update', 'delete');
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
              $this->crud->addClause('where', 'id_reseller',$user->id);
              $this->crud->addClause('where', 'restaurant_id', request()->restaurant_id);
              $this->crud->addClause('where', 'id_category', request()->id_category);
            }else{
               $this->crud->addClause('whereIn', 'restaurant_id', $restaurants_ids);
               $this->crud->addClause('where', 'id_category', request()->id_category);
            }
           
        }else{
          $this->crud->addClause('where', 'id_category', request()->id_category);
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
