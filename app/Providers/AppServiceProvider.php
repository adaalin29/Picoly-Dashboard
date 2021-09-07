<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Backpack\LangFileManager\app\Models\Language;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $langs = [];
        foreach(Language::where('active', true)->get() as $lang) {
          $langs[$lang->abbr] = $lang->name;
        }
      config(['backpack.crud.locales' => $langs]);
    }
}
