<?php

namespace App\Http\Middleware;
use Backpack\LangFileManager\app\Models\Language;

use Closure;

class RedirectSSL
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url = $request->url();
        if(strpos($url, 'https://') === false){
          $url = str_replace('http://', 'https://', $url);
          return redirect($url);
        }
        return $next($request);
    }
}
