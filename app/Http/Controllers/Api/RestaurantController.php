<?php

namespace App\Http\Controllers\Api;

use Storage;
use App\Models\Restaurant;
use App\Models\RestaurantsTable;
use App\Models\Waiter;
use App\Models\Review;
use App\Models\Deal;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Restaurant as RestaurantEvent;
use App\Events\ClientCloseTable;
use App\Events\ClientCancelCommand;
use Pusher\Pusher;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use App\Models\Menu;
use Backpack\LangFileManager\app\Models\Language;
use Config;
use Carbon\Carbon;
class RestaurantController extends Controller
{
    public $pusher;
    public function __construct()
    {
        $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
        $pusherConfig = config('broadcasting.connections.pusher', []);
        $this->pusher = new Pusher($pusherConfig['key'], $pusherConfig['secret'], $pusherConfig['app_id'], $pusherConfig['options']);
    }

    public function getStatics(Request $request){
        $despre = Config::get('settings.about');
        $terms = Config::get('settings.terms');
        return [
            'success' => true,
            'despre' => $despre,
            'terms' => $terms,
        ];
    }

    public function connect(Request $request)
    {
        $restaurantCode = $request->code;
        if (!$restaurantCode)
            return ['success' => false, 'error' => 'code-required'];
        
        $restaurant = Restaurant::findByCode($restaurantCode);
        if (!$restaurant)
            return ['success' => false, 'error' => 'code-invalid'];     

        $tableNo = Restaurant::parseQrCode($restaurantCode)['table_no'];
        $table = RestaurantsTable::where('id',$tableNo)->first();
        $table->status = RestaurantsTable::STATUS_OCCUPIED;  
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant, $table->toArray()));
        return [
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];
    }

    public function connectWithVerification(Request $request)
    {
//         if(!$request->version){
//           $device = $request->device;
//           $link = "itms-apps://itunes.apple.com/us/app/id1499998318";
//           if($device == 'android'){
//             $link = "market://details?id=tm.getwaiterapp";
//           }
//           return ['success' => false, 'error' => 'Please update the app for the best experience', 'update' => true, 'link' => $link];
//         }
      
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        if (!$restaurantCode)
            return ['success' => false, 'error' => 'code-required'];
        
        $restaurant = Restaurant::findByCode($restaurantCode);
        if (!$restaurant)
            return ['success' => false, 'error' => 'code-invalid'];     

        $tableNo = Restaurant::parseQrCode($restaurantCode)['table_no'];
        $table = RestaurantsTable::where('id',$tableNo)->first();

        $toOcupy = true;
        if($table->status == RestaurantsTable::STATUS_FREE){
            $table->status = RestaurantsTable::STATUS_OCCUPIED;  
        }
        else{
            $toOcupy = false;
        }
           
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        if($toOcupy){
            broadcast(new RestaurantEvent($restaurant, $table->toArray()));
        }
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        $table['category_id'] = intval($table['category_id']);
        $disable_call_waiter = false;
        $activate_add_cart = false;
        $required_personal_details = false;
        if($restaurant['tables_categories']){
          foreach($restaurant['tables_categories'] as $tab_cat){
            if($tab_cat['category_id'] == $table['category_id']){
              $disable_call_waiter = array_key_exists('disable_call_waiter', $tab_cat) ? $tab_cat['disable_call_waiter'] : false;
              $activate_add_cart = array_key_exists('activate_add_cart', $tab_cat) ? $tab_cat['activate_add_cart'] : false;
              $required_personal_details = array_key_exists('show_personal_details', $tab_cat) ? $tab_cat['show_personal_details'] : false;
            }
          }
        }
        return [
            'success' => true,
            'update'  => false,
            'restaurant' => $restaurant,
            'table' => $table,
            'disable_call_waiter' => $disable_call_waiter,
            'activate_add_cart' => $activate_add_cart,
            'required_personal_details' => $required_personal_details,
            'custom_order_popup' => $restaurant['custom_order_popup'] == 1 ? true : false,
            'show_personal_details_form' => $restaurant['show_personal_details_form'] == 1 ? true : false,
        ];
    }

    public function leaveReview(Request $request)
    {
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
//         $table = RestaurantsTable::where('id',$request->table_id)->first();
//         if($table->status == RestaurantsTable::STATUS_FREE){
//             return ['success' => false, 'msg' => 'Nu mai esti conectat la aceasta masa'];
//         }  
        $review = new Review;
        $review->content = $request->content;
        $review->rate = $request->rate;
        $review->food_rate = $request->food;
        $review->for = 'restaurant';
        $review->restaurant_id = $request->restaurant_id;
        if($request->table_id){
            $table = RestaurantsTable::where('id',$request->table_id)->first();
            if($table->last_waiter){
                $review->waiter_id = $table->last_waiter;
            }
        }

        if(!$review->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        return [
            'success' => true,
        ];
    }

    public function occupyTable(Request $request)
    {
      
       $fallbackLang = Language::where('default', true)->first();
       $lang = $fallbackLang->abbr;
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];
         
        $table->status = RestaurantsTable::STATUS_OCCUPIED;  
        if($request->waiter_id){
            $table->last_waiter = $request->waiter_id;
        }
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
      
        if($request->input('order_id') != null){
          $order = Order::find($request->input('order_id'));
          $order->status = 'acceptata';
          $order->save();
        }

        broadcast(new RestaurantEvent($restaurant, $table->toArray()));
        return [
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];
    }

    public function checkUserConnected(Request $request){
      
      if(!$request->version){
          return ['error' => 'Please update the app for the best experience', 'update' => true];
      }
      
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table){
            return ['success' => false, 'error' => 'table-not-found'];
        }

        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        
        // Pana aici
        return[
            'success' => true,
        ];
    }

    public function callWaiter(Request $request){
      
      if(!$request->version){
          return ['error' => 'Please update the app for the best experience', 'update' => true];
      }
      
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        $table->status = RestaurantsTable::STATUS_REQUESTED;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
      if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
    public function sendDeals(Request $request){
      
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        $table->status = RestaurantsTable::STATUS_DEALS;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        $table->dealTitle = $request->dealTitle;
        $table->dealDescription = $request->dealDescription;
        $order = new Order;
        $order->id_restaurant = $request->restaurant_id;
        $order->id_table = $request->table_id;
        $order->id_waiter = $table->last_waiter;
        $order->products = [[
           'name'=>$request->dealTitle,
           'description'=>$request->dealDescription,
        ]];
        $order->status = 'plasata';
        $order->save();
        $table->order_id = $order->id;
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
  public function sendService(Request $request){
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        $table->status = RestaurantsTable::STATUS_SERVICE;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        $table->serviceTitle = $request->serviceTitle;
        $table->serviceDescription = $request->serviceDescription;
        $table->price = $request->servicePrice;
        $order = new Order;
        $order->id_restaurant = $request->restaurant_id;
        $order->id_table = $request->table_id;
        $order->id_waiter = $table->last_waiter;
        $order->products = [[
           'name'=>$request->serviceTitle,
           'description'=>$request->serviceDescription,
           'price'=>floatval($request->servicePrice),
        ]];
        $order->price = floatval($request->servicePrice);
        $order->status = 'plasata';
        $order->save();
        $table->order_id = $order->id;
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
    
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
  public function sendOrder(Request $request){
    
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        $table->status = RestaurantsTable::STATUS_ORDER;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        $table->orderName = $request->orderName;
        $table->orderMessage = $request->orderMessage;
        $order = new Order;
        $order->id_restaurant = $request->restaurant_id;
        $order->id_table = $request->table_id;
        $order->id_waiter = $table->last_waiter;
        $order->products = [[
           'name'=>$request->orderName,
           'description'=>$request->orderMessage,
        ]];
        $order->status = 'plasata';
        $order->save();
        $table->order_id = $order->id;
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
  public function sendCommand(Request $request){
      $fallbackLang = Language::where('default', true)->first();
      $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        
      $fallbackLang = Language::where('default', true)->first();
        if ($fallbackLang) config(['app.fallback_locale' => $fallbackLang->abbr]);
        $lang = Language::findByAbbr(request()->header('Language') ?: config('app.fallback_locale'));
        if ($lang) {
            app()->setLocale($lang->abbr);
        }
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
      
      
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        $table->status = RestaurantsTable::STATUS_COMMAND;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        $table->products = JSON_encode($request->products,true);
        $table->message = $request->message;
        $table->total  = $request->total;
        $order = new Order;
        $order->id_restaurant = $request->restaurant_id;
        $order->id_table = $request->table_id;
        $order->id_waiter = $table->last_waiter;
    
        $order->products = $request->products;
        $order->price = $request->total;
        if($request->input('request_user_data') != null || $request->input('request_user_data')){
          if($request->input('userFormData') != null && count($request->input('userFormData')) > 0){
            $crt_data = $request->input('userFormData');
            if($crt_data[0]['userName'] == null || $crt_data[0]['userEmail'] == null || $crt_data[0]['userPhone'] == null || $crt_data[0]['userAddress'] == null){
              return[
                  'success' => false,
                  'error' => $lang == "ro" ? "Pentru a plasa comanda, te rugam sa completezi datele personale" : "To place the order, please fill in your personal data",
              ];
            }
          }
        }
        
        if($request->input('userFormData') != null && count($request->input('userFormData')) > 0){
          $order->form_data = json_encode($request->input('userFormData')[0]);
        }
       
        $order->message = $request->message;
        $order->status = 'plasata';
        $order->save();
        $table->order_id = $order->id;
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
      // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
       if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }

    public function requestBill(Request $request){
      
      if(!$request->version){
          return ['error' => 'Please update the app for the best experience', 'update' => true];
      }
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
        
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];
        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        if($request->pay_type == 'card'){
            $table->paytype = 'card';   
        }
        else{
            $table->paytype = 'cash';
        }
      
        $table->status = RestaurantsTable::BILL_REQUESTED;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }

    public function oneMoreTurn(Request $request){
      
      if(!$request->version){
          return ['error' => 'Please update the app for the best experience', 'update' => true];
      }
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];
        if($table->waiter_dnd == 1){
          return ['success' => false, 'error' => 'Momentan ospătarul este indisponibil!'];
        }
        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  

        $table->status = RestaurantsTable::ONE_MORE_TURN;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];
    }

    public function cancelOrder(Request $request){
      
      if(!$request->version){
          return ['error' => 'Please update the app for the best experience', 'update' => true];
      }
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        if($table->status == RestaurantsTable::STATUS_FREE){
            return ['success' => false, 'error' => 'Nu mai esti conectat la aceasta masa'];
        }  
        
        $table->status = RestaurantsTable::CANCEL_ORDER;   
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
       if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];
    }

    
    public function leaveTable(Request $request){
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];

        $table->status = RestaurantsTable::STATUS_FREE;  
        if($request->waiter_id){
            $table->last_waiter = $request->waiter_id;
        } 
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
        broadcast(new ClientCloseTable($restaurant,$table->toArray()));
//         if($_SERVER['REMOTE_ADDR'] == '89.35.129.44'){
//         }
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
  public function cancelCommand(Request $request){
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table)
            return ['success' => false, 'error' => 'table-not-found'];
        if($request->waiter_id){
            $table->last_waiter = $request->waiter_id;
        } 
//         $table->status = RestaurantsTable::CANCEL_COMMAND;
        $table->status = RestaurantsTable::STATUS_OCCUPIED;
        if(!$table->save()){
            return ['success' => false, 'error' => 'something went wrong'];     
        } 
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
//         if($_SERVER['REMOTE_ADDR'] == '89.35.129.44'){
//           broadcast(new ClientCancelCommand($restaurant,$table->toArray()));
//         }
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        if($request->input('order_id') != null){
          $order = Order::find($request->input('order_id'));
          $order->status = 'anulata';
          $order->save();
        }
        // Pana aici
        return[
            'success' => true,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }
  
      public function dndTable(Request $request){
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
      
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if (!$table){
            return ['success' => false, 'error' => 'table-not-found'];
        }
        $blocked = false;
        if($table->waiter_dnd == 1){
          RestaurantsTable::where('id',$request->table_id)->update(['waiter_dnd' => 0]);  
          $blocked = false;
        } else{
          RestaurantsTable::where('id',$request->table_id)->update(['waiter_dnd' => 1]);  
          $blocked = true;
        }
        $table = RestaurantsTable::where('id',$request->table_id)->first();
        if ($tableName = \App\Models\TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        broadcast(new RestaurantEvent($restaurant,$table->toArray()));
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
        if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        // Pana aici
        return[
            'success' => true,
            'blocked' => $blocked,
            'restaurant' => $restaurant,
            'table' => $table,
        ];

    }

    public function getDeals(Request $request){
        $fallbackLang = Language::where('default', true)->first();
        $lang = $fallbackLang->abbr;
      
        $restaurantCode = $request->code;
        if($request->lang){
          $lang = $request->lang;
        }
        $restaurant = Restaurant::where('id',$request->restaurant_id)->first();
        if (!$restaurant)
            return ['success' => false, 'error' => 'restaurant-invalid'];
        
        // Cand se trece aplicatia pe live, trebuie sterse liniile de mai jos
        $restaurant = $restaurant->toArray();
       if(array_key_exists($lang, $restaurant['name'])){
          $restaurant['name'] = $restaurant['name'][$lang];
          $restaurant['description'] = $restaurant['description'][$lang];
        } else{
          $restaurant['name'] = $restaurant['name']['ro'];
          $restaurant['description'] = $restaurant['description']['ro']; 
        }
        $menu = Menu::with('categories.products')->with('deals')->where('id_restaurant',$restaurant['id'])->orderBy('lft','asc')->get();
        $currDate = Carbon::now()->format('Y-m-d H:i');
        $menuFiltered = [];
        foreach($menu as $key => &$menuItem){
          if($menuItem->start_date && $menuItem->promotion == 1){
            $start_date = Carbon::parse($menuItem->start_date)->format('Y-m-d H:i');
            $end_date = Carbon::parse($menuItem->end_date)->format('Y-m-d H:i');
            if($start_date<=$currDate && $end_date>=$currDate){
              array_push($menuFiltered,$menuItem);
            }
          }else{
            array_push($menuFiltered,$menuItem);
          }
        }
//         $menu = array_values($menu);
        // Pana aici
      
        return[
            'success' => true,
            'menu'=>$menuFiltered,
          ];
    }
  
  public function createUser(){
    dd('da');
  }

}