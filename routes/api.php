<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('connect', 'RestaurantController@connect');
Route::post('connectWithVerification', 'RestaurantController@connectWithVerification');
Route::post('occupyTable', 'RestaurantController@occupyTable');
Route::post('callWaiter', 'RestaurantController@callWaiter');
Route::post('senddeals', 'RestaurantController@sendDeals');
Route::post('sendservice', 'RestaurantController@sendService');
Route::post('sendorder', 'RestaurantController@sendOrder');
Route::post('sendcommand', 'RestaurantController@sendCommand');


Route::post('requestBill', 'RestaurantController@requestBill');
Route::post('leaveTable', 'RestaurantController@leaveTable');
Route::post('cancelCommand', 'RestaurantController@cancelCommand');
Route::post('dndTable', 'RestaurantController@dndTable');
Route::post('cancelOrder', 'RestaurantController@cancelOrder');
Route::post('oneMoreTurn', 'RestaurantController@oneMoreTurn');
Route::post('getDeals', 'RestaurantController@getDeals');
Route::post('leaveReview', 'RestaurantController@leaveReview');
Route::post('getStatics', 'RestaurantController@getStatics');
Route::post('checkUserConnected', 'RestaurantController@checkUserConnected');
Route::get('getLang', 'LanguageController@getLang');

Route::group(['prefix' => 'pusher'], function () {
    Route::post('/auth', '\App\Http\Controllers\PusherController@pusherAuth');
});

Route::group(['prefix' => 'picoly', 'middleware' => 'api-auth'], function () {
    Route::get('/get-tables', '\App\Http\Controllers\ExternalApi\ExternalApiController@getTables');
    Route::get('/get-products', '\App\Http\Controllers\ExternalApi\ExternalApiController@getProducts');
    Route::post('/get-waiters', '\App\Http\Controllers\ExternalApi\ExternalApiController@createUser');
    Route::post('/get-orders', '\App\Http\Controllers\ExternalApi\ExternalApiController@getOrders');
    Route::post('/get-table-info', '\App\Http\Controllers\ExternalApi\ExternalApiController@getTableInfo');
    Route::post('/get-order-info', '\App\Http\Controllers\ExternalApi\ExternalApiController@getOrderInfo');
    Route::post('/create-user', '\App\Http\Controllers\ExternalApi\ExternalApiController@createUser');
});
