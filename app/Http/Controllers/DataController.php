<?php
namespace App\Http\Controllers;

use App\Models\Http\Models\User;
use Illuminate\Support\Facades\DB;

class DataController
{
    public function index()
    {
        //原生SQL
        // $user = DB::select('SELECT * FROM laravel_users');
        // return $user;

        //查询构造器
        // $user = DB::table('laravel_users')->find(19);
        // return $user;
        // return response()->json($user);

        //模型
        // $user = User::all();
        // return $user;

        // $user = DB::table('users')->get();
        // $user = DB::table('users')->first();
        // $user = DB::table('users')->value('email');//获取到第一条数据的email值
        // $user = DB::table('users')->find(20);//查询单条数据
        // $user = DB::table('users')->pluck('username');//pluck(字段名)可以获取所有数据单列值的集合

        //分块查询
        // DB::table('users')->orderBy('id','desc')->chunk(3,function($users){
        //     foreach($users as $user){
        //         echo $user->username;
        //     }
        //     echo '<br/>';
        // });
        
        //聚合查询
        // $user = DB::table('users')->count();
        // $user = DB::table('users')->avg('price');

        // return [DB::table('users')->where('id',18)->exists()];
        // $user = DB::table('users')->select('username as name','email')->get();
        // return $user;

        // $users = DB::table('users')->selectRaw('COUNT(*) AS count, gender') 
        //                             ->groupBy('gender') 
        //                             ->havingRaw('count>5') 
        //                             ->get();

        // $users = DB::table('users')->where('id','=',19)->get();
        // $users = DB::table('users')->where('username','like','%小%')->get();

        // $users = DB::table('users')->where([
        //     'gender' => '男',
        //     'status' => '1'
        // ])->toSql();

        // $users = DB::table('users')->where([
        //     ['gender','=','男'],
        //     ['price','>',90]
        // ])->get();


        // $users = DB::table('users')->where('price','>',95)
        //                             ->orWhere('gender','女')
        //                             ->get();

        // $users = DB::table('users')->where('price','>',95)
        //                             ->orWhere(function($query){
        //                                 $query->where('gender','女')->where('username','like','%小%');
        //                             })->get();

        // $users = DB::table('users')->whereBetween('price',[60,90])->get();
        // $users = DB::table('users')->whereNull('uid')->toSql();
        // $users = DB::table('users')->whereDate('created_at','2018-12-11')->get();


        // $users = DB::table('users')->whereColumn('created_at','updated_at')->get();
        // $users = DB::table('users')->whereColumn('created_at','>','updated_at')->get();


        // $users = DB::table('users')->orderBy('id','desc')->get();
        // $users = DB::table('users')->latest()->get();
        // $users = DB::table('users')->inRandomOrder()->get();

        //构造器的join多表查询
        // $users = DB::table('users')->join('books','books.user_id','=','users.id')
        //                             ->join('profiles','profiles.user_id','=','users.id')
        //                             ->get();

        // $users = DB::table('users')->leftJoin('books','books.user_id','=','users.id')
        //                             ->rightJoin('profiles','profiles.user_id','=','users.id')
        //                             ->get();

        // $users = DB::table('users')->select('username','email')
        //                             ->crossJoin('books')
        //                             ->distinct()
        //                             ->get();
        $users = User::all();
        $arr = [12,1,5,7];
        // $users = "nihao";
        // return $users;
        return view('test',[
            "users" => $users,
            "arr"   => $arr
        ]);
    }
}