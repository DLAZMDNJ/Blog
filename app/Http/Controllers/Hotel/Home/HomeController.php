<?php

namespace App\Http\Controllers\Hotel\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$home = DB::table('qm_home')->get();
    	$user = DB::table('qm_user')->get();
    	$server = DB::table('qm_server')->get();
    	return view('hotel.home.index');
    }
}
