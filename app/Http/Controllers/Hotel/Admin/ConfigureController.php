<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ConfigureController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_configure')->get();
		return view('hotel.admin.qm_configure.index',['list'=>$list]);
	}
}
