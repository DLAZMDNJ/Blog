<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CloseController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_close')->get();
		return view('hotel.admin.qm_close.index',['list'=>$list]);
	}
}
