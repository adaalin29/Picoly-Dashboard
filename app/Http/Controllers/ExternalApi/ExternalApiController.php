<?php

namespace App\Http\Controllers\ExternalApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\TableNames;
use App\Models\ProductCategories;
use App\Models\RestaurantsTable;
use App\Models\Menu;
use App\Models\Waiter;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;


class ExternalApiController extends Controller
{
  public function generateApiKey(Request $request){
    if($request->input('restaurant_id') != null){
      $restaurant_id = $request->input('restaurant_id');
      $apy_key = str_random(32);
      Restaurant::where('id', $restaurant_id)->update(['api_key' => $apy_key]);
      return ['success' => true, 'api_key' => $apy_key, 'msg' => 'ApiToken successfully generated!'];
    } else{
      return ['success' => false, 'msg' => 'Error generating new token!'];
    }
  }
  
  
   /**
     * @OA\Get(
     ** path="/api/picoly/get-tables",
     *   tags={"Get tables"},
     *   summary="Fetch tables",
     *   operationId="get-tables",
     *      security={
     *        {"token_auth": {}},
     *      },
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
  public function getTables(Request $request){
    $token = $request->headers->get('token');
    $restaurant = Restaurant::with('tables.tableLocation')->where('api_key', $token)->first();
    if($restaurant){
      $tables = $restaurant->tables;
    } else{
      return ['status' => 404, 'success' => false, 'tables' => [], 'msg' => 'Restaurant not found'];
    }
    return ['status' => 200, 'success' => true, 'tables' => $tables];
  }
  /**
     * @OA\Get(
     ** path="/api/picoly/get-products",
     *   tags={"Get products"},
     *   summary="Fetch products",
     *   description="Get all menus with digital categories and every digital categories has products inside, like a tree: Menu>DigitalCategories>Products",
     *   operationId="get-products",
     *      security={
     *        {"token_auth": {}},
     *      },
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
  public function getProducts(Request $request){
    $token = $request->headers->get('token');
    $restaurant = Restaurant::where('api_key', $token)->first();
    if($restaurant){
      $menus = Menu::with('categories.products')->where('id_restaurant', $restaurant->id)->get();
    } else{
      return ['status' => 404, 'success' => false, 'menus' => [], 'msg' => 'Restaurant not found'];
    }
    return ['status' => 200, 'success' => true, 'menus' => $menus];
  }
   /**
     * @OA\Post(
     **  path="/api/picoly/get-orders",
     *   tags={"Get orders by date"},
     *   summary="Fetch orders",
     *   description="The timestamp format need to be Y-m-d. Example: 2020-11-27. In each order you can have deals, services or products described below: Deal have name, description;
      Service have name, description, price;
      Product have anything else;",
     *   operationId="get-orders",
     *   security={
     *      {"token_auth": {}},
     *   },
     *   @OA\Parameter(
     *      name="date",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
  public function getOrders(Request $request){
    $date = $request->input('date');
    $token = $request->headers->get('token');
    if($date == null){
      $date = Carbon::now()->format('Y-m-d');
    }
    $restaurant = Restaurant::with('tables')->where('api_key', $token)->first();
    if(!$restaurant){
      return ['status' => 404, 'success' => false, 'tables' => [], 'msg' => 'Restaurant not found'];
    }
    $orders = Order::with('restaurantTable')->with('waiter')->where('id_restaurant',$restaurant->id)->where('created_at','>=',$date.' 00:00:00')->where('created_at', '<=', $date.' 23:59:59')->orderBy('created_at','desc')->get();
    if($orders){
     foreach($orders as &$order){
       if($order->restaurantTable){
         if ($tableName = \App\Models\TableNames::find($order->restaurantTable['table_name'])) {
             $order->table_name = $tableName->name;
         }
         if ($tableLocation = \App\Models\ProductCategories::find($order->restaurantTable['category'])) {
             $order->table_location = $tableLocation->name;
         }
       }
       unset($order->restaurantTable);
      }
    }
    return ['status' => 200, 'success' => true, 'orders' => $orders];
  }
  
  /**
     * @OA\Post(
     **  path="/api/picoly/get-table-info",
     *   tags={"Get table info by table_id"},
     *   summary="Fetch table info",
     *   description="Look for table status
          free -  libera;
          occupied -  ocupata;
          requested -  esti chemat;
          bill -  cere nota;
          turn -  cere nota;
          cancel -  cere nota;
          deals -  cand comand o oferta disponibila;
          service  - cand comand un serviciu disponibil;
          order  - cand faci o comanda custom unde ceri ce vrei tu;
          command  - cand faci o comanda cu produse;
          cancel-command - cand refuz o comanda din admin;",
     *   operationId="get-table-info",
     *   security={
     *      {"token_auth": {}},
     *   },
     *   @OA\Parameter(
     *      name="table_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
  public function getTableInfo(Request $request)
    {
        $token = $request->headers->get('token');
        $table_id = $request->input('table_id');
        if($table_id == null){
          return ['status' => 400, 'success' => false, 'msg' => 'Invalid table id'];
        }
        $restaurant = Restaurant::with('tables')->where('api_key', $token)->first();
        if(!$restaurant){
          return ['status' => 404, 'success' => false, 'tables' => [], 'msg' => 'Restaurant not found'];
        }
        $table = RestaurantsTable::where('id',$table_id)->first();
        if(!$table){
           return ['status' => 404, 'success' => false, 'msg' => 'Table not found'];
        }
        if ($tableName = TableNames::find($table->table_name)) {
            $table->table_name = $tableName->toArray()['name'];
        }
        if ($tableLocation = ProductCategories::find($table->category)) {
            $table->category = $tableLocation->toArray()['name'];
        }
        return ['status' => 200, 'success' => true, 'table' => $table];
    }
  
   /**
     * @OA\Post(
     **  path="/api/picoly/get-order-info",
     *   tags={"Get order info by table_id and date"},
     *   summary="Fetch order info by table id and date",
     *   description="Deal: name, description;
          Service: name, description, price;
          Product: anything else;",
     *   operationId="get-table-info",
     *   security={
     *      {"token_auth": {}},
     *   },
     *   @OA\Parameter(
     *      name="table_id",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *   @OA\Parameter(
     *      name="date",
     *      in="query",
     *      required=true,
     *      @OA\Schema(
     *           type="string"
     *      )
     *   ),
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
    public function getOrderInfo(Request $request){
      $date = $request->input('date');
      $token = $request->headers->get('token');
      $table_id = $request->input('table_id');
      if($table_id == null){
        return ['status' => 400, 'success' => false, 'msg' => 'Invalid table id'];
      }
      if($date == null){
        $date = Carbon::now()->format('Y-m-d');
      }
      $restaurant = Restaurant::with('tables')->where('api_key', $token)->first();
      if(!$restaurant){
        return ['status' => 404, 'success' => false, 'tables' => [], 'msg' => 'Restaurant not found'];
      }
      $orders = Order::with('restaurantTable')->with('waiter')->where('id_table', $table_id)->where('id_restaurant',$restaurant->id)->where('created_at','>=',$date.' 00:00:00')->where('created_at', '<=', $date.' 23:59:59')->orderBy('created_at','desc')->get();
      if($orders){
       foreach($orders as &$order){
         if($order->restaurantTable){
           if ($tableName = \App\Models\TableNames::find($order->restaurantTable['table_name'])) {
               $order->table_name = $tableName->name;
           }
           if ($tableLocation = \App\Models\ProductCategories::find($order->restaurantTable['category'])) {
               $order->table_location = $tableLocation->name;
           }
         }
         unset($order->restaurantTable);
        }
      }
      return[
          'success' => true,
          'status' => 200,
          'orders' => $orders,
      ];
    } 
     /**
     * @OA\Get(
     ** path="/api/picoly/get-waiters",
     *   tags={"Get waiters"},
     *   summary="Fetch waiters",
     *   operationId="get-waiters",
     *      security={
     *        {"token_auth": {}},
     *      },
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   ),
     *   @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *)
     **/
  public function getWaiters(Request $request){
    $token = $request->headers->get('token');
    return $token;
    $restaurant = Restaurant::where('api_key', $token)->first();
    $waiters = [];
    if($restaurant){
      $waiters = Waiter::select('id', 'name')->where('restaurant_id', $restaurant->id)->get();;
    } else{
      return ['status' => 404, 'success' => false, 'waiters' => [], 'msg' => 'Restaurant not found'];
    }
    return ['status' => 200, 'success' => true, 'waiters' => $waiters];
  }
  
  public function createUser(Request $request){
    $token = $request->headers->get('token');
    
    
    
    $user = json_decode($request->headers->get('user'));
    $newUser = new User();
    $newUser->name = $user->name;
    $user->name = explode(' ',$user->name);
    $userEmail = strtolower($user->name[0] . $user->name[1]).'@client-picoly.ro';
//     aici trebuie tratat urmatorul caz: ce se intampla daca ma inregistrez inca o data cu acelasi nume,o sa dea eroare
    $newUser->email = $userEmail;
    $generatedPassword = $this->generateRandomString(10);
    $newUser->password = Hash::make($generatedPassword);
    $newUser->package_name = $user->package;
    $newUser->exp_date = $user->exp_date;
    $newUser->save();
    
    
    $newRestaurant = new Restaurant();
    $newRestaurant->name = '{"en":"Restaurant name","ro":"Numele restaurantului"}';
//     aici trebuie vazuta o chestie, nu stie sa faca link de multilanguage
    $newRestaurant->description = '{"ro":"<p>Descriere restaurant<\/p>","en":"<p>Restaurant description<\/p>"}';
    $newRestaurant->phone = $user->phone;
    $newRestaurant->email = $user->email;
    $newRestaurant->website = 'Insert website';
    $newRestaurant->facebook = 'https://www.facebook.com/';
    $newRestaurant->table_number = 0;
    $newRestaurant->image = 'uploads/restaurant/57f323be51f26af1b894af3611976be1.jpg';
    $newRestaurant->address = 'Insert adress';
    $newRestaurant->tables_categories = '[{"category_id":3152,"name":"7","name_table":"4","number":2,"sound_table":"2","show_personal_details":true},{"category_id":1788,"name":"5","name_table":"4","number":2,"show_personal_details":true}]';
    $newRestaurant->request_confirm = 1;
    $newRestaurant->delivered_button = 1;
    $newRestaurant->waiters_can_see_reviews = 1;
    $restaurantOwnerId = User::where('email',$newUser->email)->first()->id;
    $newRestaurant->owner_id = $restaurantOwnerId;
    $newRestaurant->review_receiver = $user->email;
    $newRestaurant->review_receiv_period = 'weekly';
    $newRestaurant->menu_url = 'Menu';
    $newRestaurant->custom_order = 1;
    $newRestaurant->show_personal_details_form = 1;
    $newRestaurant->save();
    
    
    for($i=1;$i<=2;$i++){
      $restaurantTable = new RestaurantsTable();
      $restaurantTable->name = $i;
      $restaurantTable->table_name = 4;
      $restaurantTable->status = "free";
      $restaurantTable->restaurant_id = Restaurant::where('owner_id',$restaurantOwnerId)->first()->id;
      //nu este solutie optima, daca utilizatorul are mai multe restaurante
      $restaurantTable->payType = "cash";
      $restaurantTable->waiter_dnd = 0;
      $restaurantTable->category = 7;
      $restaurantTable->save();
    }
    
    $response = [
      'email'=>$newUser->email,
      'password'=>$generatedPassword,
      'exp_date'=>$newUser->exp_date,
      'success'=>true,
    ];
    return $response;
  }
  
  public static function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnoprsqtvxyz<>!~_[];';
    $charactersLength = strlen($characters);
    $randomString = '0';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    if($randomString[0]== 0){
      $randomString[0] = "1";
    }
    return $randomString;
}
}