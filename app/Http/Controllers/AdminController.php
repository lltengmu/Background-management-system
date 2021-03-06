<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $staffs = DB::table('team')->get();
        return view('admin/index',['staffs' => $staffs]);
    }
    public function logout()
    {
        session()->flush();
        Session::flash('logout','ιεΊζε');
        return redirect('/admin/login');
    }
    public function profile()
    {
        return view('/admin/profile');
    }
    public function userManagement()
    {
        $users = DB::table('users')->get();
        return view('/admin/userManagement',['users' => $users]);
    }
}