<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $staffs = DB::table('team')->get();
        return view('/user/index',['staffs'=>$staffs]);
    }
    public function logout()
    {
        session()->flush();
        Session::flash('logout','退出成功');
        return redirect('/user/login');
    }
    public function profile()
    {
        return view('/user/profile');
    }
    public function orderEntry(Request $request)
    {
        if($request->isMethod('post')){
            $user = DB::table('orderentry')->get();
            return $user;
        }
        return view('/user/orderEntry');
    }
}