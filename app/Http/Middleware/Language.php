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
        // dd($request->session()->has('user.language'));
        if ($request->session()->has('user.language')) {
            $locale = $request->session()->get('user.language');
        }
        // return $locale;
        if(empty($locale)){
           $locale = $request->lang;
        }

        if(empty($locale)){
            $locale = config('app.locale');
        }
        App::setLocale($locale);
        return $next($request);
    }
}
