<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FoodCategoryController extends Controller
{
	public function index()
	{
		$list = DB::table('qm_foodcategory')->get();
		return view('hotel.admin.qm_foodcategory.index',['list'=>$list]);
	}
	public function add()
	{
		return view('hotel.admin.qm_foodcategory.add');
	}
	public function doAdd(Request $request)
	{
		$data = $request->except('_token');
		if($request -> hasFile('pic'))
		{
			if($request -> file('pic') -> isValid())
			{
				$extension = $request -> file('pic') -> getClientOriginalExtension();
				$filename = mt_rand(1000000,9999999).'.'.$extension;
				$dir = './uploads/avatar/category/';
				$request -> file('pic') -> move($dir,$filename);//storeAs
				$pic = '/uploads/avatar/category/'.$filename;
			}
		}else
		{
			$pic = '/uploads/avatar/category/default.jpg';
		}
		 
		$res = DB::table('qm_foodcategory')->insert(['name'=>$data['name'],'pic'=>$pic]);
		if($res)
		{
			$list = DB::table('qm_foodcategory')->get();
			return view('hotel.admin.qm_foodcategory.index',['list'=>$list]);
		}
	}
	public function delete($id)
	{
		$res = DB::table('qm_foodcategory')->where('id',$id)->delete();
		$list = DB::table('qm_foodcategory')->get();
		return view('hotel.admin.qm_foodcategory.index',['list'=>$list]);
	}
	public function edit($id)
	{	
		
		$info = DB::table('qm_foodcategory')->where('id',$id)->first();
		return  view('hotel.admin.qm_foodcategory.edit',['info'=>$info]);
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
					$dir = './uploads/avatar/category/';
					$request -> file('pic') -> move($dir,$filename);//storeAs
					$pic = '/uploads/avatar/category/'.$filename;
				}
			}else
			{
				$pic = '/uploads/avatar/foodcategory/default.jpg';
			}
		}else
		{
			$pic = $data['ifpic'];
		}
		$res = DB::table('qm_foodcategory')->where('id',$data['id'])->update(['name'=>$data['name'],'pic'=>$pic]);
		if($res)
		{
			$list = DB::table('qm_foodcategory')->get();
			return view('hotel.admin.qm_foodcategory.index',['list'=>$list]);
		}
	}
}
