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
        $session = session("user_type");
        $user = DB::table('admin')->where('email',session("user_type"))->first();
        return view('admin/LoanApplication',['user' => $user ]);
    }
    public function logout()
    {
        session()->flush();
        Session::flash('logout','退出成功');
        return redirect('/');
    }
    public function approval()
    {
        return view('admin/approval');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function customer()
    {
        return view('admin/customer');
    }
    public function loanTamplate()
    {
        return view('admin/loanTamplate');
    }
    public function report()
    {
        return view('admin/report');
    }
    public function sp()
    {
        return view('admin/sp');
    }
    public function user()
    {
        return view('admin/user');
    }
}