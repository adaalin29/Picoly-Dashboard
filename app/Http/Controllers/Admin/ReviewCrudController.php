<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ReviewRequest as StoreRequest;
use App\Http\Requests\ReviewRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
use App\Models\Waiter;
/**
 * Class ReviewCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ReviewCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Review');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/review');
        $this->crud->setEntityNameStrings('review', 'reviews');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);

        $restaurants = collect([]);
        if ($allRestaurants) {
            $restaurants = Restaurant::get();
            $waiters = Waiter::get();
            $multipleRestaurants = true;
        } else {
            $restaurants = $user->restaurants()->get();
            $restaurants_ids = $user->restaurants()->get('id');
            $waiters = Waiter::whereIn('restaurant_id', $restaurants_ids)->get();
            $waiters_ids = Waiter::whereIn('restaurant_id', $restaurants_ids)->get('id');
            $multipleRestaurants = $restaurants->count() > 1;
        }

        $restaurantsArray = $restaurants->keyBy('id')->pluck('name', 'id')->toArray();
        $waitersArray = $waiters->keyBy('id')->pluck('name', 'id')->toArray();

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->addColumn([
            'name' => 'content', // The db column name
            'label' => "Content", // Table column heading
        ]);
        $this->crud->addColumn([
            'name' => 'rate', // The db column name
            'label' => "Rate", // Table column heading
        ]);
        $this->crud->addColumn([
            'name' => 'for', // The db column name
            'label' => "For", // Table column heading
        ]);
        $this->crud->addColumn([
            'label' => "Restaurant", 
            'type' => "select",
            'name' => 'restaurant_id', 
            'entity' => 'restaurant', 
            'attribute' => "name", 
            'model' => "App\Models\Restaurant", 
        ]);
        $this->crud->addColumn([
            'label' => "Waiter", 
            'type' => "select",
            'name' => 'waiter_id', 
            'entity' => 'waiter', 
            'attribute' => "name", 
            'model' => "App\Models\Waiter", 
        ]);

        $this->crud->addField([
            'name' => 'content',
            'type' => 'ckeditor',
            'label' => "Content"
        ]);
        $this->crud->addField([
            'name' => 'rate',
            'type' => 'number',
            'label' => "Rate"
        ]);
        $this->crud->addField([
            'name' => 'for',
            'label' => "Review for",
            'type' => 'select2_from_array',
            'options' => ['waiter' => 'Waiter', 'restaurant' => 'Restaurant'],
            'allows_null' => false,
            'default' => 'restaurant',
        ]);
        $this->crud->addField([
			'label' => "Restaurant",
            'type' => 'select2',
            'name' => 'restaurant_id',
            'entity' => 'restaurant', 
            'attribute' => 'name', 
            'model' => "App\Models\Restaurant", 
            'hint' => 'In case the reviews is for restaurant',
        ]);
        $this->crud->addField([
			'label' => "Waiter",
            'type' => 'select2',
            'name' => 'waiter_id',
            'entity' => 'waiter', 
            'attribute' => 'name', 
            'model' => "App\Models\Waiter", 
            'hint' => 'In case the reviews is for a waiter',
        ]);
        

        $this->crud->denyAccess(['create', 'update', 'reorder', 'delete']);
        // add asterisk for fields that are required in ReviewRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        
        if (!$allRestaurants) {
            $this->crud->addClause('whereIn', 'restaurant_id', $restaurants_ids);
            $this->crud->addClause('orWhereIn', 'waiter_id', $waiters_ids);
        }
        $this->crud->setListView('vendor.backpack.crud.list_reviews');
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
