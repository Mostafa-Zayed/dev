<?php

namespace App\Http\Middleware;

use App;
use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! empty($request->lang)){
            App::setLocale($request->lang);
            $request->session()->put('user.language',$request->lang);
            return $next($request);
        }
        if ($request->session()->has('user.language')) {
            $locale = $request->session()->get('user.language');
            App::setLocale($locale);
            return $next($request);
        }
        
       
       
    }
}
