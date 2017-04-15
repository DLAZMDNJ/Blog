<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_order')->get();
		return view('hotel.admin.qm_order.index',['list'=>$list]);
	}
}
