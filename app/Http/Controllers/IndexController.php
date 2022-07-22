<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AdminController;

class IndexController extends Controller
{
    /* 
    *get: @return view('admin.index')
    *post: 实现登录
    */
    public function index(Request $request)
    {
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(),[
                'username'    => 'required|max:30',
                'password' => 'required',
                'captcha'  => 'required',
            ],
            [
                'username.required'    => '请输入您的用户名!',
                'username.max'         => '用户名长度最大为30个字符!',
                'password.required' => '请输入您的密码!',
                'captcha.required'  => '请输入验证码!',
            ]);
            if ($validator->fails()) {
                return redirect('/admin/login')
                       ->withErrors($validator)
                       ->withInput();
            };
            
            $user = DB::table('admin')->where([
                "username" => $request->input('username'),
            ])->first();


            if(!$user){
                return redirect('/admin/login')
                       ->withErrors("用户不存在")
                       ->withInput();
            }else if(
                $user->username != $request->input('username') || $user->password != sha1($request->input('password'))
            ){
                return redirect('/admin/login')
                       ->withErrors("账号或者密码不正确")
                       ->withInput();
            }elseif(session('captcha') != strtoupper($request->input('captcha'))){
                return redirect('/admin/login')
                        ->withErrors('验证码错误')
                        ->withInput();
            }else{
                //存储session 通过全局 Session 助手函数 ...
                session(['user_info' => $user->username ]);
                session(['user_type' => "admin" ]);
                //update log 此次登录的设备ip和数据里存储的ip不一样时，更新字段last_login_ip
                if($request->ip() != $user->login_ip){
                    DB::table('admin')->where(["username" => $request->input('username')])->update([
                        "nickname"    => "管理员",
                        "login_time"  => time(),
                        "login_ip"    => $request->ip(),
                        "last_login_ip"    => $user->login_ip,
                        "last_login_time"  => $user->login_time,
                        "update_time"      => time(),
                    ]);
                }
                DB::table('admin')->where(["username" => $request->input('username')])->update([
                    "nickname"         => "管理员",
                    "login_time"       => time(),
                    "login_ip"         => $request->ip(),
                    "last_login_ip"    => $request->ip(),
                    "last_login_time"  => $user->login_time,
                    "update_time"      => time(),
                ]);
                DB::table('admin')->where(["username" => $request->input('username')])->increment('login_num');
                //重定向到后台首页
                return redirect('/admin/index');
                // return $user->email;
            }
        }
        return view('index/login');
    }
    public function register(){
        return view('index/register');
    }
}