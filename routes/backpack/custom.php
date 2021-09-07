<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    CRUD::resource('restaurant', 'RestaurantCrudController')->with(function () {
        Route::get('restaurant/{id}/print', [
            'as' => 'crud.restaurant.printTables',
            'uses' => 'RestaurantCrudController@printTables',
        ]);
        Route::get('restaurant/{id}/createWaiter', [
            'as' => 'crud.restaurant.createWaiter',
            'uses' => 'RestaurantCrudController@createWaiter',
        ]);
        Route::get('restaurant/{id}/sendReviews', [
            'as' => 'crud.restaurant.sendReviews',
            'uses' => 'RestaurantCrudController@sendReviews',
        ]);
    });
    CRUD::resource('admins', 'UserCrudController');
    CRUD::resource('waiter', 'WaiterCrudController');
    CRUD::resource('restaurantstable', 'RestaurantsTableCrudController');
    CRUD::resource('review', 'ReviewCrudController');
    CRUD::resource('deal', 'DealCrudController');
    CRUD::resource('table_locations', 'ProductCategoriesCrudController');
    CRUD::resource('table_names', 'TableNamesCrudController');
    CRUD::resource('digital_categories', 'DigitalCategoriesCrudController');
    CRUD::resource('menu_products', 'MenuProductsCrudController');
    CRUD::resource('menus', 'MenuCrudController');
    CRUD::resource('sounds', 'SoundCrudController');
    
    Route::post('generate-api-key', '\App\Http\Controllers\ExternalApi\ExternalApiController@generateApiKey');
    Route::post('import-menu', '\App\Http\Controllers\Admin\ImportController@import_menu');
}); // this should be the absolute last line of this file