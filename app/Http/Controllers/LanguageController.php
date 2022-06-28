<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function index($lang)
    {
        if(array_key_exists($lang,config('app.locales'))){
            session(['applocale' => $lang ]);
        }
        return back()->withInput();
    }
    
}


