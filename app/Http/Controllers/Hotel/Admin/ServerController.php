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
	public function add()
	{
		return view('hotel.admin.qm_server.add');
	}
	public function doAdd(Request $request)
	{
		$data = $request->except('_token');
// 		dd($data);
		if($request -> hasFile('pic'))
		{
			if($request -> file('pic') -> isValid())
			{
				$extension = $request -> file('pic') -> getClientOriginalExtension();
				$filename = mt_rand(1000000,9999999).'.'.$extension;
				$dir = './uploads/avatar/server/';
				$request -> file('pic') -> move($dir,$filename);//storeAs
				$pic = '/uploads/avatar/server/'.$filename;
			}
		}else
		{
			$pic = '/uploads/avatar/server/default.jpg';
		}
		$res = DB::table('qm_server')->insert(['name'=>$data['name'],'on_people'=>$data['on_people'],'time'=>$data['time'],'price'=>$data['price'],
				'is_onsale'=>$data['is_onsale'],'pic'=>$pic
		]);
		if($res)
		{
			$list = DB::table('qm_server')->get();
			return view('hotel.admin.qm_server.index',['list'=>$list]);
		}
	}
	public function delete($id)
	{
		$res = DB::table('qm_server')->where('id',$id)->delete();
		$list = DB::table('qm_server')->get();
		return view('hotel.admin.qm_server.index',['list'=>$list]);
	}
	public function edit($id)
	{
	
		$info = DB::table('qm_server')->where('id',$id)->first();
		return  view('hotel.admin.qm_server.edit',['info'=>$info]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
// 		dd($data);
		if(isset($data['pic']))
		{
			if($request -> hasFile('pic'))
			{
				if($request -> file('pic') -> isValid())
				{
					$extension = $request -> file('pic') -> getClientOriginalExtension();
					$filename = mt_rand(1000000,9999999).'.'.$extension;
					$dir = './uploads/avatar/server/';
					$request -> file('pic') -> move($dir,$filename);//storeAs
					$pic = '/uploads/avatar/server/'.$filename;
				}
			}else
			{
				$pic = '/uploads/avatar/server/default.jpg';
			}
		}else
		{
			$pic = $data['ifpic'];
		}
		$res = DB::table('qm_server')->where('id',$data['id'])->update(['name'=>$data['name'],'pic'=>$pic,'time'=>$data['time'],'price'=>$data['price'],
				'pic'=>$pic,'is_onsale'=>$data['is_onsale'],'on_people'=>$data['on_people']
		]);
		if($res)
		{
			$list = DB::table('qm_server')->get();
			return view('hotel.admin.qm_server.index',['list'=>$list]);
		}
	}
}
