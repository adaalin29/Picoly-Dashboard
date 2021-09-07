<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class RestaurantsTable extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'restaurants_tables';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'table_name','status','restaurant_id','category','category_id','paytype'];
    // protected $hidden = [];
    // protected $dates = [];

    const STATUS_FREE          = 'free';          // libera
    const STATUS_OCCUPIED         = 'occupied';          // ocupata
    const STATUS_REQUESTED     = 'requested';     // esti chemat 
    const BILL_REQUESTED     = 'bill';     // cere nota
    const ONE_MORE_TURN     = 'turn';     // cere nota
    const CANCEL_ORDER     = 'cancel';     // cere nota
    const STATUS_DEALS     = 'deals';     // cand comand o oferta disponibila
    const STATUS_SERVICE     = 'service'; //cand comand un serviciu disponibil
    const STATUS_ORDER     = 'order'; //cand faci o comanda custom unde ceri ce vrei tu
    const STATUS_COMMAND     = 'command'; //cand faci o comanda cu produse
    const CANCEL_COMMAND = 'cancel-command'; //cand refuz o comanda din admin

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public static function findByCode($code)
    {
        $pcode = Restaurant::parseQrCode($code);
        return static::where('restaurant_id', $pcode['restaurant_id'])->where('id', $pcode['table_no'])->first();
    }
  
  public function tableLocation(){
    return $this->belongsTo(ProductCategories::class, 'category', 'id');
  }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
