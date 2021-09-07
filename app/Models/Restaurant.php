<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use App\User;
use App\Models\BackpackUser;

class Restaurant extends Model
{
    use CrudTrait;
    use HasTranslations;
  
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'restaurants';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['name','description','phone','email','website','facebook','image','table_number','address','tables_categories','waiters_can_see_reviews','request_confirm','delivered_button','owner_id','review_receiver','review_receiv_period', 'menu_url','digital_menu','id_reseller','custom_order', 'custom_order_popup', 'show_personal_details_form'];
    protected  $translatable = ['name','description'];
    protected $casts = ['tables_categories' => 'array'];
    // protected $dates = [];

    /*
    
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function getRestaurantCode($table)
    {
        return route('qr-page', [
            'r' => $this->id,
            't' => $table,
        ]);
    }

    public static function parseQrCode($code)
    {
        $result = [
            'restaurant_id' => null,
            'table_no' => null,
        ];
        $parseurl = parse_url($code);
        // new code format
        $query = null;
        if (optional($parseurl)['query']) {
            parse_str($parseurl['query'], $query);
        }
        $result['restaurant_id'] = optional($query)['r'];
        $result['table_no']      = optional($query)['t'];
        
        return optional($result);
    }

    public static function findByCode($code)
    {
        $pcode = Restaurant::parseQrCode($code);
        return Restaurant::find($pcode['restaurant_id']);
    }

    public function updateTables()
    {
        $distinc_categories_ids = [];

        $tables_categories = $this->tables_categories;
        foreach ($tables_categories as $item) {
            if(!isset($item['name']) || !isset($item['number']) ){continue;}
            $value = intval($item['number'], 10);
            $currentRealTableCount = $this->tables()->where('category_id',optional($item)['category_id'])->count();
            if(array_search(optional($item)['category_id'],$distinc_categories_ids) === false){
                $distinc_categories_ids[] = optional($item)['category_id'];
            }
            $this->tables()->where('category_id',optional($item)['category_id'])->update([
              'category' => $item['name'],
              'table_name' => $item['name_table'],
            ]);
            if ($value > $currentRealTableCount) {
                // need to create more tables
                $create = $value - $currentRealTableCount;
                $newTableNo = $currentRealTableCount + 1;
                for ($i = 0; $i < $create; $i++) {
                    $this->tables()->create([
                        'name'     => $newTableNo,
                        'table_name'     => $item['name_table'],
                        'category' => $item['name'],
                        'category_id' => $item['category_id'],
                        'status' => RestaurantsTable::STATUS_FREE,
                    ]);
                    $newTableNo++;
                }
            }
            if ($value < $currentRealTableCount) {
                // need to delete a few tables
                $delete = $currentRealTableCount - $value;
                $deleteTableNo = $currentRealTableCount;
                for ($i = 0; $i < $delete; $i++) {
                    $this->tables()->where('name', $deleteTableNo)->where('category_id', optional($item)['category_id'])->delete();
                    $deleteTableNo--;
                }
            }
        }

        $existing_categories = $this->tables()->distinct('category_id')->get();
        foreach ($existing_categories as $exist) {
            if(array_search($exist->category_id,$distinc_categories_ids) === false){
                $this->tables()->where('category_id',$exist->category_id)->delete();
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function tables(){
        return $this->hasMany(RestaurantsTable::class, 'restaurant_id', 'id');
    }

    public function waiters(){
        return $this->hasMany(Waiter::class, 'restaurant_id', 'id');
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'restaurant_id', 'id');
    }
    public function deals(){
        return $this->hasMany(Deal::class, 'restaurant_id', 'id');
    }

    public function owner(){
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
    public function setOwnerIdAttribute($value){
      $this->attributes['owner_id']=$value;
      $owner = BackpackUser::find($value);
      if($owner && $owner->can('adauga-restaurant')){
        $this->attributes['id_reseller']=$value;
      }
      
    }
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
    public function setImageAttribute($value)
    {
        $attribute_name = 'image';
        $disk = 'public';
        $destination_path = 'uploads/restaurant';

            // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        elseif (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value)->encode('jpg', 90);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }

        elseif (starts_with($value, 'http'))
        {
           
        }

        else{
                $this->attributes[$attribute_name] = $value;
        }
    }

}
