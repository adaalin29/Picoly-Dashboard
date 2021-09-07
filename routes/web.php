<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('qr', function () { return view('qr-page'); })->name('qr-page');
Route::get('login', 'HomeController@login');
Route::get('/', 'HomeController@dashboard');
Route::get('rating', 'HomeController@rating');
Route::post('signin','HomeController@signin');
Route::post('get-orders-by-table','HomeController@getOrdersTable');
Route::get('orders','HomeController@getOrders');

Route::get('logout','HomeController@logoutAccount');
// Route::get('insertSetting','HomeController@insertSetting');

Route::get('/downloadPDF/{id}','HomeController@downloadPDF');

Route::get('/set-lang/{lang}', function ($lang) {
  session(['locale' => $lang]);
  return redirect()->back();
});

Route::group(['prefix' => 'pusher'], function () {
    Route::post('/auth', 'PusherController@pusherAuth');
});
