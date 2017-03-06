<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    //
 public function index()
 {
 	$inter = DB::table('blog_interest')->get();
 	$time = DB::table('blog_time')->get();
 	$tour = DB::table('blog_tour')->get();
 	$friends = DB::table('blog_friends')->get();
 	return view('home.index',['inter' => $inter,'time' =>$time,'tour'=>$tour,'friends'=>$friends]);
 }
}
