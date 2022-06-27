<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
            "password" => $request->input('password')
        ])->exists();

        if(!$user){
            return redirect('/')
              ->withErrors("用户不存在")
              ->withInput();;
        }
        return view('admin/home');
        // $user = DB::table('admin')->where('email','=',$message['email'])->get();
        
        // return $request->ip();
    }
}