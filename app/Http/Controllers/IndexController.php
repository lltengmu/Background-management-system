<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $input = $request->all();
        return view('index/login');
        // $messages = [
        //     'email.required' => '请输入邮箱!',
        //     'email.max' => 'email栏最大长度是255!',
        //     'email.max' => 'email格式不正确!',
        //     'password.required' => '请输入密码!',
        // ];
        // $rules = $request->validate([
        //     'email' => 'required|max:255|email',
        //     'password' => 'required',
        // ]);
        // $validator = Validator::make($input, $rules, $messages);
        // $user = DB::table('admin')->where('email','=',$message['email'])->get();
        
        // return $request->ip();
    }
}