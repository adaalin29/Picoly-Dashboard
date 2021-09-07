<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;

class DigitalCategories extends Model
{
    use CrudTrait;
     use HasTranslations;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'digital_categories';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['category','id_restaurant','id_menu'];
    protected  $translatable = ['category'];
    // protected $hidden = [];
    // protected $dates = [];
  
    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'id_restaurant', 'id');
    }
    public function menu(){
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }
  
   public function setImagesAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "/products/";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function products(){
      return $this->hasMany(MenuProducts::class,'id_category','id')->orderBy('lft','asc');
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
}
