<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $currentMiddleware = $request->route()->middleware();
            $str = $request->route()->uri;
             
            // if(count($currentMiddleware) >0 && in_array('doctors',$currentMiddleware)){
                
            //     return route('doctors.login');
            // }
            //var_dump(strstr($str,'doctors'));
            //dd($str);
            
            if(strstr($str,'doctors') === false ){
                return route('signin');    
            }
            return route('doctors.login');
            
        }
    }
}
