<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RestaurantRequest as StoreRequest;
use App\Http\Requests\RestaurantRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Waiter;
use App\Models\BackpackUser;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reviews;

/**
 * Class RestaurantCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RestaurantCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Restaurant');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/restaurant');
        $this->crud->setEntityNameStrings('restaurant', 'restaurants');

        $user = optional(backpack_auth()->user());
        $allRestaurants = $user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS);
        $userReseller  = $user->can('adauga-restaurant');
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        if($userReseller){
          $this->crud->addField([
            'name' => 'id_reseller',
            'type' => 'hidden',
            'default'=>$user['id'],
          ]);
        } else{
           $this->crud->addField([
            'name'  => 'id_reseller',
            'type'  => 'hidden',
            'default' => $user->id_reseller,
          ]);
        }

        $this->crud->addColumn([
            'name' => 'image', // The db column name
            'label' => "Image", // Table column heading
            'type' => 'image',
            'disk' => 'public',
            'height' => '100px',
            'width' => '100px',
        ]);
        $this->crud->addColumn([
            'name' => 'name', // The db column name
            'label' => "Name", // Table column heading
        ]);
        $this->crud->addColumn([
            'name' => 'email', // The db column name
            'label' => "Email", // Table column heading
        ]);
        if ($allRestaurants) {
            $this->crud->addColumn([
                'label' => "Owner", 
                'type' => "select",
                'name' => 'owner_id', 
                'entity' => 'owner', 
                'attribute' => "name", 
                'model' => "App\User", 
            ]);
        }

        if ($allRestaurants) {
            $this->crud->addField([
                'name'      => 'owner_id',
                'label'     => 'Restaurant owners',
                'type'      => 'select2',
                'entity'    => 'owner',
                'attribute' => 'name',
                'model'     => 'App\User',
            ], 'both');
        }
      if ($userReseller) {
            $this->crud->addField([
                'name'      => 'owner_id',
                'label'     => 'Restaurant owners',
                'type'      => 'select2_from_array',
                'options' => \App\Models\BackpackUser::where('id_reseller',$user->id)->get()->pluck('name','id'),
            ], 'both');
        }

        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField([
            'name' => 'description',
            'type' => 'ckeditor',
            'label' => "Description"
        ]);
        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Phone"
        ]);
        $this->crud->addField([
            'name' => 'email',
            'type' => 'email',
            'label' => "Email"
        ]);
        $this->crud->addField([
            'name' => 'address',
            'type' => 'text',
            'label' => "Address"
        ]);
        $this->crud->addField([
            'name' => 'website',
            'type' => 'text',
            'label' => "Website"
        ]);
        $this->crud->addField([
            'name' => 'facebook',
            'type' => 'text',
            'label' => "Facebook"
        ]);
        $this->crud->addField([
            'name' => 'image',
            'type' => 'image',
            'disk' => 'public',
            'label' => "Image",
            'upload' => true,
             'crop' => true,
        ]);
//         $this->crud->addField([
//           'name'  => 'custom_order',
//           'label' => 'Custom order(allow or deny order products from app)',
//           'type'  => 'checkbox',
           
//          ]);
        $this->crud->addField([
          'name'  => 'custom_order_popup',
          'label' => 'Allow or deny showing custom order popup on app',
          'type'  => 'checkbox',
         ]);
        $this->crud->addField([
          'name'  => 'show_personal_details_form',
          'label' => 'Show personal details form checkout app',
          'type'  => 'checkbox',
         ]);
        $this->crud->addField([ // Table
            'name' => 'tables_categories',
            'label' => 'Tables',
            'type' => 'tablet',
            'entity_singular' => 'category', // used on the "Add X" button
            'columns' => [
                'name' => 'Location of tables (example: Terasa)',
                'name_table' => 'The name of the table field(example: Masa, Sezlong, Camera)',
                'number' => 'Number of tables',
                'sound_table' => 'Check sound',
                'disable_call_waiter' => 'Disable call waiter',
                'activate_add_cart' => 'Activare Add Cart',
                'show_personal_details' => 'Required personal details',
                'sort' => 'Sort',
                'delete' => 'Delete',
                'copy_url' => 'Copy url',
            ],
            'max' => 10, // maximum rows allowed in the table
            'min' => 1, // minimum rows allowed in the table
        ]);
        // $this->crud->addField([
		// 	'name' => 'request_confirm',
		// 	'label' => 'Request confirmation for every action',
        //     'type' => 'checkbox',
        //     'hint' => 'If this option is checked, waiters have to confirm that every request from the client has been done. (In order to see the waiting time of client)',
        // ]);
        // $this->crud->addField([
		// 	'name' => 'delivered_button',
		// 	'label' => 'Request action when order delivered',
        //     'type' => 'checkbox',
        //     'hint' => 'If this option is checked, waiters have to confirm that the order was delivired to the table (In order to see the waiting time for orders)',
        // ]);
        $this->crud->addField([
			'name' => 'waiters_can_see_reviews',
			'label' => 'Waiters can see their reviews',
            'type' => 'checkbox',
            'hint' => 'If checked, waiters can see their own reviews in app',
        ]);
        $this->crud->addField([
            'name' => 'review_receiver',
            'type' => 'email',
            'label' => "Email on which to send new reviews:"
        ]);
        $this->crud->addField([
            'name'      => 'review_receiv_period',
            'label'     => 'I want to receive an email with the new reviews: ',
            'type'      => 'select_from_array',
            'options' => ['weekly' => 'Weekly', 'monthly' => 'Monthly'],
        ]);
        // $this->crud->addField([
        //     'name'  => 'table_number',
        //     'label' => 'Number of tables',
        //     'type'  => 'number',
        // ], 'both');

        $crudAllowed = ['list'];
        if ($allRestaurants) {
            array_push($crudAllowed, 'create', 'update', 'delete');
        } else {
            array_push($crudAllowed, 'create');
            if (in_array($this->crud->getActionMethod(), ['create', 'edit', 'update', 'delete'])) {
                if ($user->can('update', \App\Models\Restaurant::find($this->crud->getCurrentEntryId()))) {
                    array_push($crudAllowed, 'update', 'delete');
                }
            } else {
                array_push($crudAllowed, 'update', 'delete');
            }
        }
        if(!$userReseller){
          $this->crud->denyAccess(['create', 'update', 'reorder', 'delete']);
        }
        $this->crud->allowAccess($crudAllowed);
        

        // add asterisk for fields that are required in RestaurantRequest
        $this->crud->addButtonFromView('line', 'table_print', 'table_print', 'end');

        $this->crud->addButtonFromView('line', 'see_waiters', 'see_waiters', 'end');
        $this->crud->addButtonFromView('line', 'see_tables', 'see_tables', 'end');

//         $this->crud->addButtonFromView('line', 'see_deals', 'see_deals', 'end');

        $this->crud->addButtonFromView('line', 'see_reviews', 'see_reviews', 'end');

        $this->crud->addButtonFromView('line', 'create_waiter', 'create_waiter', 'end');
        $this->crud->addButtonFromView('line', 'send_reviews', 'send_reviews', 'end');
        $this->crud->addButtonFromView('line', 'generate_api_key', 'generate_api_key', 'end');
        $this->crud->addButtonFromView('line', 'import_products', 'import_products', 'end');

        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        if (!$allRestaurants) {
            if($userReseller){
              $this->crud->addClause('where', 'id_reseller', $user->id);
            }else{
              $this->crud->addClause('where', 'owner_id', $user->id);
            }
          
        }
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $this->beforeSave($request);

        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $this->afterSave();
        return $redirect_location;
    }

    public function beforeSave($request){   
        $user = optional(backpack_auth()->user());
        if (!$request->filled('owner_id')) {
            $owner_id = $user->id;
            $request->merge(['owner_id' => $owner_id]);
        }
    }

    public function afterSave()
    {
        if ($this->crud->entry) $this->crud->entry->updateTables();
    }

    public function update(UpdateRequest $request)
    {
        $this->beforeSave($request);
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        $this->afterSave();
        return $redirect_location;
    }


    public function printTables($id)
    {
        // check admin user login
        $user = optional(backpack_auth()->user());
        if (!$user) abort(401);
        
        // check restaurant exists
        $restaurant = $this->crud->getEntry($id);
        if (!$restaurant) abort(404);
        
        $tables = $restaurant->tables;
        if($tables){
//           table_name name category
           $table_locations = \App\Models\ProductCategories::get();
           $table_names = \App\Models\TableNames::get();
          foreach($tables as &$table){
            foreach($table_locations as $category){
              $founded_category = 'interior';
              if($category->id == intval($table->category)){
                 $founded_category = $category->getTranslation('name','ro', true);
                 $table->category = $founded_category;
                 break;
              }
            }
            foreach($table_names as $tn){
              if($tn->id == $table->table_name){
                $foundedName = $tn->getTranslation('name','ro', true);
                $table->table_name = $foundedName;
                break;
              }
            }
            
          }
//             dd($tables->toArray());
        }
//         dd($restaurant->toArray());
      
        return view('vendor.backpack.crud.restaurant.print1', compact(['restaurant','tables']));
      
//         return view('vendor.backpack.crud.restaurant.print', compact(['restaurant','tables']));
    }

    public function createWaiter($id){
        $res = Restaurant::where('id',$id)->first();
        $user = BackpackUser::where('id',$res->owner_id)->first();
        $existing = Waiter::where('email',$user->email)->where('restaurant_id',$id)->first();
        if($existing){
            \Alert::error('You already have an account with this information')->flash();
            return back();
        }

        $waiter = new Waiter;
        $waiter->restaurant_id = $id;
        $waiter->verified = 0;
        $waiter->name = $user->name;
        $waiter->email = $user->email;
        $waiter->password = $user->password;
        if(!$waiter->save()){
            \Alert::success('Something went wrong')->flash();
            return back();
        }
        \Alert::success('Waiter account has been created')->flash();
        return back();
    }

    public function sendReviews($id){
        $restaurant = Restaurant::where('id',$id)->first();
        if($restaurant->review_receiver){
            $reviews = Review::where('restaurant_id',$restaurant->id)->orderBy('created_at','desc')->get();
            Mail::to(strip_tags($restaurant->review_receiver))->send(new Reviews($reviews));
            \Alert::success('An email has been sent')->flash();
            return back();
        }
        else{
            \Alert::error('Please complete an email for receiving reviews first')->flash();
            return back();
        }
    }

}
