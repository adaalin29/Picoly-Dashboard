<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RestaurantsTableRequest as StoreRequest;
use App\Http\Requests\RestaurantsTableRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Waiter;
use Session;
/**
 * Class RestaurantsTableCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RestaurantsTableCrudController extends CrudController
{
    public function __construct()
    {
        
            $this->middleware(function ($request, $next) {
               $waiter = Waiter::where('restaurant_id',request()->restaurant)->first();
//               dd($waiter);
              if($waiter){
                 $date_sesiune = array(
                'name' => $waiter->name,
                'id' => $waiter->id,
              );
                Session::put('user', $date_sesiune);
                return redirect('/');
              }else{
                return redirect()->back();
              }
            });
    }
  
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\RestaurantsTable');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/restaurantstable');
        $this->crud->setEntityNameStrings('restaurantstable', 'restaurants_tables');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        
        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in RestaurantsTableRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
        if(request()->restaurant){
            $this->crud->addClause('where', 'restaurant_id', request()->restaurant);
        }
        $this->crud->denyAccess('create');
        $this->crud->removeButton('update');
        $this->crud->denyAccess('delete');
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
