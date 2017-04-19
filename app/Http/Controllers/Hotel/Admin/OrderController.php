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
		$user = DB::table('qm_user')->get();
		$home = DB::table('qm_home')->get();
		$list = DB::table('qm_order')->where('is_out','<>',1)->where('is_clean',1)->where('is_onsale',1)->get();
		return view('hotel.admin.qm_order.index',['list'=>$list,'user'=>$user,'home'=>$home]);
	}
	public function edit($id)
	{
		$info = DB::table('qm_order')->where('id',$id)->first();
		return view('hotel.admin.qm_order.edit',['info'=>$info]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
		$order = DB::table('qm_order')->where('id',$data['id'])->first();
		$is_out = $order->is_out;
		$status = $order->status;
		if($data['is_out'] != 1)
		{
			$res = DB::table('qm_order')->where('id',$data['id'])->update(['status'=>$data['status']]);
			if($res)
			{
				$user = DB::table('qm_user')->get();
				$home = DB::table('qm_home')->get();
				$list = DB::table('qm_order')->where('is_out','<>',1)->where('is_onsale',1)->get();
				return view('hotel.admin.qm_order.index',['list'=>$list,'user'=>$user,'home'=>$home]);
			}
		}
		if($data['is_out'] == 1)
		{
			$res = DB::table('qm_order')->where('id',$data['id'])->update(['is_out'=> 1,'is_clean'=> 0,'is_onsale'=>0]);
			if($res)
			{
				$user = DB::table('qm_user')->get();
				$home = DB::table('qm_home')->get();
				$list = DB::table('qm_order')->where('is_out',1)->where('is_clean',0)->get();
				return view('hotel.admin.qm_close.index',['list'=>$list,'user'=>$user,'home'=>$home]);
			}
		}
// 		dd($data);
		
		
	}
	public function delete($id)
	{
		$res = DB::table('qm_order')->delete($id);
		if($res)
		{
			$user = DB::table('qm_user')->get();
			$home = DB::table('qm_home')->get();
			$list = DB::table('qm_order')->where('is_out','<>',1)->where('is_onsale',1)->where('is_clean',1)->get();
			return view('hotel.admin.qm_order.index',['list'=>$list,'user'=>$user,'home'=>$home]);
		}
	}
}
