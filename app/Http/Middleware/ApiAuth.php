<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Restaurant;

class ApiAuth
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
        $authorized = false;
        if($request->headers->has('token') && $request->headers->get('token')){
          // search db
          
          $founded = Restaurant::where('api_key', $request->headers->get('token'))->first();
          if($founded){
            $authorized = true;
//             pe viitor trebuie sa administrez cheile astea de API
          }elseif($request->headers->get('token') == 'JiJPyOFV9JHyk6OHruyRr8Y1hh3lTKJN'){
            $authorized = true;
          }
        }  
        if(!$authorized){
          abort(401, 'Invalid token or restaurant restaurant cannot be founded');
        }
        return $next($request);
    }
}
