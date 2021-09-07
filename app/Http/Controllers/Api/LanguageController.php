<?php

namespace App\Http\Controllers\Api;
use Lang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Backpack\LangFileManager\app\Models\Language;

class LanguageController extends Controller{
  
  public function getLang(){
    $langs = collect(Language::getActiveLanguagesArray());
    $langsArray = $langs->map(function ($val) {
        return array_only($val, ['id', 'abbr', 'script', 'native','default','name']);
    })->values()->toArray();
    $languages = $langs->pluck('abbr');
    $result = [];
    foreach($languages as $language){
      app()->setLocale($language);
      $texts = Lang::get('app');
      if($texts){
        $result[$language] = $texts;
      }
    }
    return [
      'strings'=>$result,
      'langs' => $langsArray,
    ];
  }
}
  