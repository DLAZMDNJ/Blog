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
		$user = DB::table('qm_user')->get();
		$home = DB::table('qm_home')->get();
		$list = DB::table('qm_order')->where('is_out',1)->where('is_clean',0)->get();
		return view('hotel.admin.qm_close.index',['list'=>$list,'user'=>$user,'home'=>$home]);
	}
	public function edit($id)
	{
		$info = DB::table('qm_order')->where('is_out',1)->where('is_clean',0)->where('id',$id)->first();
		return view('hotel.admin.qm_close.edit',['info'=>$info]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
		if($data['is_clean'] == 0)
		{
			$info = DB::table('qm_order')->where('is_out',1)->where('is_clean',0)->where('id',$id)->first();
			return view('hotel.admin.qm_close.edit',['info'=>$info]);
		}
		if($data['is_clean'] == 1)
		{	
			$res = DB::table('qm_order')->where('id',$data['id'])->update(['is_clean'=>1,'is_onsale'=>0]);
			$user = DB::table('qm_user')->get();
			$home = DB::table('qm_home')->get();
			$list = DB::table('qm_order')->where('is_out',1)->where('is_clean',1)->where('is_onsale',0)->get();
			return view('hotel.admin.qm_clean.index',['list'=>$list,'user'=>$user,'home'=>$home]);
		}
	}
}
