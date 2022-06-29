<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;

class CaptchaController extends Controller
{
    //验证码________________________________________________________________________________
    public function index(){
        //创建好验证码
        $builder = new CaptchaBuilder;
        $builder->build();
        //把验证码存在session中  strtoupper()转换大小写
        session(['captcha' => strtoupper($builder->getPhrase())]);
        //在模板显示验证码
        header('Content-type:image/jpeg');
        $builder->output();
    }
    
}
