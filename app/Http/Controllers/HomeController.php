<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use Validator;
use Session;
use Storage;
use App\Models\Waiter;
use App\Models\Review;
use App\Models\Restaurant;
use PDF;
use Carbon\Carbon;

use App\Mail\Reviews;
use Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
// use Backpack\Settings\app\Models\Setting;

class HomeController extends Controller
{
//    public function insertSetting(){
//       Setting::insert(
//          [
//             'key'         => 'interval_song',
//             'name'        => 'Durata interval repetare sunet notificare',
//             'description' => 'Durata interval repetare sunet notificare(se va trece in secunde: ex: 30)',
//             'value'       => '30',
//             'field'       => '{"name":"value","label":"Durata","type":"text"}',
//             'active'      => 1,
//         ]
//       );
//     }
  
  public function login(){
    if(Session::has('user') || !Cookie::get('remember')){
      Session::forget('user');
    }
    return view('login');
  }

  public function downloadPDF($id){
    $restaurant = Restaurant::with('tables')->where('id',$id)->first();
    $tables = $restaurant->tables;

    PDF::setOptions([
      'dpi' => 150, 
      'fontDir' => '/fonts/OpenSans-Regular.ttf',
      'defaultFont' => 'sans-serif'
      ]);

    $pdf = PDF::loadView('pdf', compact(['restaurant','tables']));
    $title = $restaurant->name.'-qrcodes.pdf';
    return $pdf->download($title);
  }

  public function signin(Request $request) {
    $user = Waiter::where('email', $request->email)->first();
    if ($user){
        if (!Hash::check($request->password, $user->password)){
            return ['success' => false, 'error' => 'Parola este incorecta'];
        }
        if($user->verified){
          return ['success' => false, 'error' => 'Contul tau a fost blocat. Te rugam sa iei legatura cu managerul restaurantului'];
        }
        $date_sesiune = array(
          'name' => $user->name,
          'id' => $user->id,
        );
        if($request->input('remember') == 'on'){
          $lifetime = time() + 60 * 60 * 24 * 31; // one mounth
          cookie('remember', true, $lifetime);
        }
        Session::put('user', $date_sesiune);
      
        $restaurant = Restaurant::where('id',$user->restaurant_id)->first();
        if($restaurant->review_receiver){
          if($restaurant->last_sent){
            $last = new Carbon($restaurant->last_sent);
            $now = Carbon::now();
            if($restaurant->review_receiv_period == 'weekly'){
                if($last->diff($now)->days > 7){
                  $reviews = Review::where('restaurant_id',$restaurant->id)->orderBy('created_at','desc')->get();
                  $restaurant->last_sent = Carbon::now();
                  $restaurant->save();
                  Mail::to(strip_tags($restaurant->review_receiver))->send(new Reviews($reviews));
                }
            }
            if($restaurant->review_receiv_period == 'monthly'){
                if($last->diff($now)->days > 30){
                  $reviews = Review::where('restaurant_id',$restaurant->id)->orderBy('created_at','desc')->get();
                  $restaurant->last_sent = Carbon::now();
                  $restaurant->save();
                  Mail::to(strip_tags($restaurant->review_receiver))->send(new Reviews($reviews));
                }
            }
          }
          else{
            $reviews = Review::where('restaurant_id',$restaurant->id)->orderBy('created_at','desc')->get();
            $restaurant->last_sent = Carbon::now();
            $restaurant->save();
            Mail::to(strip_tags($restaurant->review_receiver))->send(new Reviews($reviews));
          }
        }
       


        return [
            'success' => true,
        ];
    }
    else{
        return ['success' => false, 'error' => 'Nu exista nici un utilizator cu aceasta adresa de email'];
    } 
  }

  public function logoutAccount(){
    if(Session::has('user')){
      Cookie::forget('remember');
      Session::forget('user');
      return redirect('login');
    } else{
      return redirect('login');
    }
  }

  
  public function dashboard() {
      if(Session::has('user') || Cookie::get('remember')){
          $usr = Session::get('user');  
          $user = Waiter::with('restaurant')->where('id',$usr['id'])->first();
          if($user){
            $restaurant = Restaurant::with('tables')->where('id',$user['restaurant_id'])->first();
            $tables = $restaurant->tables;
            if($tables){
              $table_locations = \App\Models\ProductCategories::get();
              $table_names = \App\Models\TableNames::get();
              $lang = Session::get('locale');
              $language = DB::table('languages')->where('abbr', $lang)->first();
              if($language){
                $lang = $language->abbr;
              } else{
                $language =  DB::table('languages')->where('default', 1)->first();
                $lang = $language->abbr;
              }
              foreach($tables as &$table){
                  $new_order[$table->id] = [];
                  if ($tableName = \App\Models\TableNames::find($table->table_name)) {
                    if(array_key_exists($lang, $tableName->toArray()['name'])){
                      $table->table_name = $tableName->toArray()['name'][$lang];
                    } else{
                      $first_lang = array_key_first($tableName->toArray()['name']);
                      $table->table_name = $tableName->toArray()['name'][$first_lang];
                    }
                  }
                  if ($tableLocation = \App\Models\ProductCategories::find($table->category)) {
                      if(array_key_exists($lang, $tableLocation->toArray()['name'])){
                        $table->category = $tableLocation->toArray()['name'][$lang];
                      } else{
                        $first_lang = array_key_first($tableLocation->toArray()['name']);
                        $table->category = $tableLocation->toArray()['name'][$first_lang];
                      }
                  }

              }
            }
          } else{
            return redirect('login');
          }
          $orders = Order::where('created_at', '>=', date('Y-m-d').' 00:00:00')->where('created_at', '<=', date('Y-m-d').' 23:59:59')->orderBy('created_at', 'desc')->get();
          if($orders){
             foreach($orders as $order){
                $new_order[$order->id_table] = [];
             }
             foreach($orders as $order){
                array_push($new_order[$order->id_table], $order->toArray());
             }
            foreach($new_order as &$order){
              if(count($order) > 0){
                $order = $order[0];
              }
            }
//             dd($new_order);
          }
          if($tables){
            foreach($tables as &$table){
              if(count($new_order[$table->id]) > 0){
                $table->products  = json_encode($new_order[$table->id]['products']);
                $table->order_id  = json_encode($new_order[$table->id]['id']);
                $table->message   = $new_order[$table->id]['message'];
                $table->total     = $new_order[$table->id]['price'];
              }
            }
          }
//         dd($tables->toArray());
          return view('dashboard',[
              'user'=>$user,
              'restaurantTables' => $tables,
              'restaurant'=>$restaurant,
              'interval_audio' => Config::get('settings.interval_song'),
          ]); 
      }
      else{
          return redirect('login');
      }

  }
  
  public function getOrdersTable(Request $request){
    $date = Carbon::now()->subDays(30)->format('Y-m-d H:i:s');
    if(Session::has('user')){
       $usr = Session::get('user');
       $user = Waiter::with('restaurant')->where('id',$usr['id'])->first();
       $orders = Order::with('restaurant')->with('restaurantTable')->with('waiter')->where('id_restaurant',$user['restaurant_id'])->where('id_table',$request->table_id)->where('created_at','>=',$date)->orderBy('created_at','desc')->get();
//         if($orders){
//           foreach($orders as &$order){
//             $order->products = json_encode($order->products);
//           }
//         }
      
       if(count($orders)>0){
            return[
              'success'=>true,
              'orders'=>$orders,
            ];
         
        }
        return[
          'success'=>false,
        ];
    }else{
          return redirect('login');
      }
    
  }
  
  public function getOrders(){
    $date = Carbon::now()->subDays(30)->format('Y-m-d H:i:s');
    if(Session::has('user')){
       $lang = Session::get('locale');
       $usr = Session::get('user');
       $user = Waiter::with('restaurant')->where('id',$usr['id'])->first();
       $orders = Order::with('restaurant')->with('restaurantTable')->with('waiter')->where('id_restaurant',$user['restaurant_id'])->where('created_at','>=',$date)->orderBy('created_at','desc')->get();
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
           if($order->products){
             foreach($order->products as $prod){
               if(array_key_exists($lang, $prod) && $prod['description_trans']){
                 $translatable_description = $prod['description_trans'][$lang];
                 $prod['description_trans'] = $translatable_description;
               }
               if(array_key_exists($lang, $prod) && $prod['description_trans']){
                 $translatable_name = $prod['name_trans'][$lang];
                 $prod['name_trans'] = $translatable_name;
               }
             }
           }
           }
        }
        $restaurant = Restaurant::with('tables')->where('id',$user['restaurant_id'])->first();
        $tables = $restaurant->tables;
//       dd($orders->toArray());
        return view('orders',[
              'orders' => $orders,
              'restaurant' => $restaurant,
          ]); 
    }
    return redirect('login');
  }

  public function rating() {
    if(Session::has('user') || Cookie::get('remember')){
        $usr = Session::get('user');  
        $user = Waiter::with('restaurant')->where('id',$usr['id'])->first();
        if($user){
          $restaurant = Restaurant::with('tables')->where('id',$user['restaurant_id'])->first();
        } else{
          return redirect('login');
        }
        if(!$restaurant->waiters_can_see_reviews){
          return redirect('/');
        }
        $reviews = Review::where('waiter_id',$user->id)->orWhere('restaurant_id',$restaurant->id)->orderBy('created_at','desc')->get();
        
        return view('rating',[
            'user'=>$user,
            'restaurant'=>$restaurant,
            'reviews'=>$reviews,
        ]); 
    }
    else{
        return redirect('login');
    }

}
  
}