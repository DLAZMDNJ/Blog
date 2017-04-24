<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class PhotoController extends Controller
{
    //
	public function index()
	{
		$list = DB::table('qm_photo')->get();
		return view('hotel.admin.qm_photo.index',['list'=>$list]);
	}
	public function edit($id)
	{
		$info = DB::table('qm_photo')->where('id',$id)->first();
		return view('hotel.admin.qm_photo.edit',['info'=>$info]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
		if(isset($data['pic']))
		{
			if($request -> hasFile('pic'))
			{
				if($request -> file('pic') -> isValid())
				{
					$extension = $request -> file('pic') -> getClientOriginalExtension();
					$filename = mt_rand(1000000,9999999).'.'.$extension;
					$dir = './uploads/avatar/photo/';
					$request -> file('pic') -> move($dir,$filename);//storeAs
					$pic = '/uploads/avatar/photo/'.$filename;
				}
			}else
			{
				$pic = '/uploads/avatar/photo/default.jpg';
			}
		}else
		{
			$pic = $data['ifpic'];
		}
// 		dd($pic);
	$res = DB::table('qm_photo')->where('id',$data['id'])->update(['description'=>$data['description'],
		'pic'=>$pic	
	]);
	if($res)
	{
		$list = DB::table('qm_photo')->get();
		return view('hotel.admin.qm_photo.index',['list'=>$list]);
	}
	}
}
