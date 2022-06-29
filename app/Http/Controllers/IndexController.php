<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AdminController;

class IndexController extends Controller
{
    public function index()
    {
        return view('index/login');
    }
    public function register(){
        return view('index/register');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|max:30|email',
            'password' => 'required',
        ],
        [
            'email.required'    => '请输入您的电子邮箱!',
            'email.max'         => '邮箱长度最大为30个字符!',
            'email.email'       => '邮箱格式错误',
            'password.required' => '请输入您的密码!',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                   ->withErrors($validator)
                   ->withInput();
        };

        $user = DB::table('admin')->where([
            "email" => $request->input('email'),
        ])->first();

        if(!$user){
            return redirect('/')
                   ->withErrors("用户不存在")
                   ->withInput();
        }else if(
            $user->email != $request->input('email') || $user->password != $request->input('password')
        ){
            return redirect('/')
                   ->withErrors("账号或者密码不正确")
                   ->withInput();
        }else{
            //存储session 通过全局 Session 助手函数 ...
            session(['user_type' => $user->email ]);
            //重定向到后台首页
            return redirect()->route('admin.home',['user' => $user->first_name ]);
            // return $user->email;
        }
        
    }
}