<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //获取语言参数，如果未选择语言，则加载默认语言fallback_locale
        if(Session::has('applocale') && array_key_exists(Session::get('applocale'),Config::get('app.locales'))){
            App::setLocale(Session::get('applocale'));
        }else{
            App::setLocale(Config::get('app.fallback_locale'));
        }
        return $next($request);
    }
}
