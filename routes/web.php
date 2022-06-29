<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
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

Route::get('/',[IndexController::class,'index']);
Route::get('/register',[IndexController::class,'register']);
Route::post('/login',[IndexController::class,'login']);
Route::get('admin/home/{user}',[AdminController::class,'index'])->name('admin.home');
Route::get('/locale',[LanguageController::class,'index'])->name('lang.change');

















// Route::get('/index',function(){
//     return 'hello,laravel';
// });
// Route::match(['post','get'],'/index',function(){
//     return 'hello,laravel';
// });
// Route::get('/index/{id}',function($id){
//     return 'hello,laravel + '.$id;
// });

//laravel8将路由绑定到控制器的新写法
//当访问 '/task' 时,对应的处理函数是TaskController控制下的index方法
// Route::get('task',[TaskController::class,'index']);
// Route::get('task/read/{id}',[TaskController::class,'read']);

//对动态参数进行限制
//链式调用where方法 第一个参数是需要进行限制的参数名，第二个参数是正则表达式
// Route::get('task/read/{id}',[TaskController::class,'read'])
//         ->where('id','[0-9]+');


//当对多个动态参数进行限制时可以采用数组方法
// Route::get('task/read/{id}',[TaskController::class,'read'])
//         ->where(['id' => '[0-9]+']);

//路由重定向
// Route::redirect('/index','/task');

//视图路由
//第一个参数 请求地址
//第二个参数 视图模板
//第三个参数 传递给视图模板的变量
// Route::view('/task','task',['id' => 10]);

//通过助手函数实现视图路由
// Route::get('/task',function(){
//     return view('task',['id' => 10]);
// });


//通过绑定控制器实现视图路由
// Route::get('/task',[TaskController::class,'index'])->name('task.index');

//路由命名
// Route::get('/task/url',[TaskController::class,'url']);
// Route::get('/task',[TaskController::class,'index'])->name('task.index');

//路由分组
//路由分组功能是为了让大量路由共享路由属性，包括中间件、命名空间等；

//路径前缀
// Route::prefix('api')->get('task',[TaskController::class,'index']);
// Route::prefix('api')->get('index',function(){
//     return 'index';
// });

// Route::group(['prefix' => 'api'],function(){
//     Route::get('task',[TaskController::class,'index']);
//     Route::get('index',function(){
//         return 'index';
//     });
// });

// Route::prefix('api')->group(function(){
//     Route::get('task',[TaskController::class,'index']);
//     Route::get('index',function(){
//         return 'index';
//     });
// });

// Route::middleware('中间名称')->group(function(){
//     Route::get('task',[TaskController::class,'index']);
//     Route::get('index',function(){
//         return 'index';
//     });
// });


//子域名
// Route::domain('127.0.0.1')->group(function(){
//     Route::get('task',[TaskController::class,'index']);
//     Route::get('index',function(){
//         return 'index';
//     });
// });

//路由绑定单行为控制器
// Route::get('one',[OneController::class,'__invoke']);
// Route::get('other',[OneController::class,'other']);

//路由回退
// 1. 如果我们跳转到了一个不存在路由时，会产生 404 错误，体验不佳； 
// 2. 可以使用回退路由，让不存在的路由自动跳转到你指定的页面去； 
// 3. 注意：由于执行顺序问题，必须把回退路由放在所有路由的最底部；
// Route::fallback(function(){
//     return redirect('/');
// });
// Route::fallback(function(){
//     return view('404');
// });

//当前路由
// Route::get('index',function(){
//     // dump(Route::current()->action);
//     return Route::currentRouteName();
// })->name('location.index');

//重定向
// Route::get('index',function(){
//     // return redirect()->route('task.index');
//     return redirect()->back();
// });

//单个资源路由
// Route::resource('blogs',BlogController::class)
//         ->except('index','show');

//批量资源路由
// Route::resources([
//     'blogs' => BlogController::class 
// ]);

//API资源路由
// Route::apiResource('blogs',BlogController::class);

//资源路由嵌套
// Route::resource('blogs.comments',CommentController::class)
//         ->shallow()->name('index','b.c.i')->parameters([
//             'blogs' => 'id',
//             'comments' => 'cid'
//         ]);

// Route::get('task/form',[TaskController::class ,'form']);

// Route::any('task/getform',function(){
//     return Request::method();
// });
// //去除部分请求不需要表单验证
// Route::any('api/getform',function(){
//     return Request::method();
// });

// //路由绑定操作数据库的类
// Route::get('data',[DataController::class,'index']);