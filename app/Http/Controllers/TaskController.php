<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    public function index()
    {
        // return 'task index';
        // $this->middleware('中间件名称');
        // echo Route::currentRouteAction();
        // return view('task',['id' => 15]);
        // return 'index';
        return response('index',201);
        // return [1,2,3];
        // return response([1,2,3]);
        // return response()->json([1,2,3]);
    }
    public function read($id)
    {
        return 'id = '.$id;
    }
    public function url()
    {
        //返回 task.index 的完整路由地址
        $url = route('task.index',['id' => 10],true);//返回  http://localhost:8000/task?id=10
        // $url = route('task.index',['id' => 10],false);//返回  /task?id=10
        return $url;
        // return redirect()->route('task.index');
    }
    public function form()
    {
        return view('form');
    }
}
