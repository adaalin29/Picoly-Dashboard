<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SoundRequest as StoreRequest;
use App\Http\Requests\SoundRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class SoundCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SoundCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Sound');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/sounds');
        $this->crud->setEntityNameStrings('sound', 'sounds');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
      
        $this->crud->addField([
            'name'    => 'sound',
            'label'   => 'Sound',
            'type'    => 'upload',
            'upload'  => true
        ]);
        $this->crud->addField([
            'name'    => 'title',
            'label'   => 'Title',
            'type'    => 'text'
        ]);
      
        $this->crud->addColumn([
          'name' => 'sound', 
          'type' => 'closure', 
          'label' => 'Sound',
          'function' => function($entry) {
              return "<div class='btn-play-sound' style='cursor: pointer;' url='/storage/".$entry->sound."'>Click to play this sound</div>";
          }
        ]);
        $this->crud->addColumn([
          'name' => 'title', 
          'type' => 'text', 
          'label' => 'Title'
        ]);
      
        // Set List View to edit the sound url title
        $this->crud->setListView('vendor.backpack.crud.list_sounds');

        // add asterisk for fields that are required in SoundRequest
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
