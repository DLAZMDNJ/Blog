<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
  
    public function index()
    {
    	$list = DB::table('qm_user')->get();
    	return view('hotel.admin.qm_user.list',['list'=>$list]);
    }
}
