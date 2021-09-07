<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TableNamesRequest as StoreRequest;
use App\Http\Requests\TableNamesRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Restaurant;
/**
 * Class TableNamesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TableNamesCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\TableNames');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/table_names');
        $this->crud->setEntityNameStrings('table name', 'table names');
      
        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
        $userReseller  = $user->can('adauga-restaurant');
      
        $this->crud->addColumn([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
            'type'=>'text',
        ]);
        $this->crud->addField([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
            'type'=>'text',
        ]);

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
      
       

        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();
        if(!$allRestaurants && !$userReseller){
          $this->crud->removeButton('delete');
//           if(!$userReseller){
            $this->crud->removeButton('create');
//           }
        }
        // add asterisk for fields that are required in TableNamesRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
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
