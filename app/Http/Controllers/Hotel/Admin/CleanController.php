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
		$user = DB::table('qm_user')->get();
		$home = DB::table('qm_home')->get();
		$list = DB::table('qm_order')->where('is_out',1)->where('is_clean',1)->where('is_onsale',0)->get();
		return view('hotel.admin.qm_clean.index',['list'=>$list,'user'=>$user,'home'=>$home]);
	}
	public function edit($id)
	{
		$info = DB::table('qm_order')->where('id',$id)->where('is_clean',1)->where('is_onsale',0)->first();
		return view('hotel.admin.qm_clean.edit',['info'=>$info]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
	
		if($data['is_onsale'] == 1)
		{
			$res = DB::table('qm_home')->where('id',$data['hid'])->increment('count', 1);
			if($res)
			{	
				$res1 = DB::table('qm_order')->delete($data['id']);
				$category = DB::table('qm_category')->get();
				$list = DB::table('qm_home')->get();
				return view('hotel.admin.qm_home.index',['list'=>$list,'cate'=>$category]);
			}
		}
	}
}
