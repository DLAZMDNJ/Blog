<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class CleanController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_clean')->get();
		return view('hotel.admin.qm_clean.index',['list'=>$list]);
	}
}
