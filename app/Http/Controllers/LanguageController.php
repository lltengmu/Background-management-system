<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function index($lang)
    {
        // return $lang;
        //将要切换的语言存储到session
        foreach(config('app.locales') as $key => $locale){
            if($lang == $key){
                session()->put('locale',$lang);
            }
        }
        // if (in_array($lang, config('app.locales'))) {
        //     session()->put('locale', $lang);
        // }
        //重定向到上一次请求，让设置语言的中间件发挥效果
        // return \session('locale');
        return redirect()
            ->back()
            ->withInput();
    }  
}


