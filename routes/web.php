<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ChangeLang;
use App\Http\Controllers\OneController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return redirect('/admin/login');
});
/* 
*管理员登录入口
*get 请求login页面
*post 实现登录
*/
Route::get('/admin/login',[IndexController::class,'index']);
Route::post('/admin/loging',[IndexController::class,'index']);
Route::get('/admin/register',[IndexController::class,'register']);

/* 
*用户登录入口
*/
Route::get('/user/login',[IndexController::class,'userlogin']);
Route::post('/user/loging',[IndexController::class,'userlogin']);
Route::get('/user/register',[IndexController::class,'register']);


/* 
*验证码
*/
Route::get('captcha',[CaptchaController::class,'index']);



Route::group([ 'middleware'=>'isLogin'],function(){
    /* 
    *admin后台路由
    */
    Route::group(['prefix' =>'/admin'],function(){
        Route::get('/index',[AdminController::class,'index']);
        Route::get('/profile',[AdminController::class,'profile']);
        Route::get('/userManagement',[AdminController::class,'userManagement']);
        Route::get('/logout',[AdminController::class,'logout']);//退出登录
    });

    /* 
    *user后台路由
    */
    Route::group(['prefix' =>'/user'],function(){
        Route::get('/index',[UserController::class,'index']);
        Route::get('/profile',[UserController::class,'profile']);
        Route::match(['post','get'],'/orderEntry',[UserController::class,'orderEntry']);
        Route::get('/logout',[UserController::class,'logout']);//退出登录
    });
    
});