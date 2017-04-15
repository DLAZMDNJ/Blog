<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ServerController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_server')->get();
		return view('hotel.admin.qm_server.index',['list'=>$list]);
	}
}
