<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FoodController extends Controller
{
    //
    public function index()
    {	
    	$cate = DB::table('qm_foodcategory')->get();
    	$list = DB::table('qm_food')->get();
    	return view('hotel.admin.qm_food.index',['list'=>$list,'cate'=>$cate]);	
    }
    public function add()
    {
    	$cate = DB::table('qm_foodcategory')->get();
    	return view('hotel.admin.qm_food.add',['cate'=>$cate]);
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
    	$res = DB::table('qm_food')->insert(['name'=>$data['name'],'cid'=>$data['cid'],'on_people'=>$data['on_people'],'price'=>$data['price'],
    			'count'=>$data['count'],'content'=>$data['content'],'is_onsale'=>$data['is_onsale'],'pic'=>$pic,'time'=>$data['time']
    	]);
    	$cate = DB::table('qm_foodcategory')->get();
    	$list = DB::table('qm_food')->get();
    	return view('hotel.admin.qm_food.index',['list'=>$list,'cate'=>$cate]);
    }
    public function edit($id)
    {
    	$cate = DB::table('qm_foodcategory')->get();
    	$info = DB::table('qm_food')->where('id',$id)->first();
    	return view('hotel.admin.qm_food.edit',['info'=>$info,'cate'=>$cate]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request->except('_token');
//     	dd($data);
    	if(isset($data['pic']))
    	{
    		if($request -> hasFile('pic'))
    		{
    			if($request -> file('pic') -> isValid())
    			{
    				$extension = $request -> file('pic') -> getClientOriginalExtension();
    				$filename = mt_rand(1000000,9999999).'.'.$extension;
    				$dir = './uploads/avatar/home/';
    				$request -> file('pic') -> move($dir,$filename);//storeAs
    				$pic = '/uploads/avatar/food/'.$filename;
    			}
    		}else
    		{
    			$pic = '/uploads/avatar/food/default.jpg';
    		}
    	}else
    	{
    		$pic = $data['ifpic'];
    	}
    	$res = DB::table('qm_food')->where('id',$data['id'])->update(['name'=>$data['name'],'cid'=>$data['cid'],'on_people'=>$data['on_people'],'price'=>$data['price'],
    			'count'=>$data['count'],'content'=>$data['content'],'is_onsale'=>$data['is_onsale'],'pic'=>$pic,'time'=>$data['time']]);
    	if($res)
    	{
    		$cate = DB::table('qm_foodcategory')->get();
    		$list = DB::table('qm_food')->get();
    		return view('hotel.admin.qm_food.index',['list'=>$list,'cate'=>$cate]);
    	}
    }
    public function delete($id)
    {
    	$res = DB::table('qm_food')->where('id',$id)->delete();
    	$cate = DB::table('qm_foodcategory')->get();
    	$list = DB::table('qm_food')->get();
    	return view('hotel.admin.qm_food.index',['list'=>$list,'cate'=>$cate]);
    }
    public function show($id)
    {
    	$category = DB::table('qm_food')->get();
    	$info = DB::table('qm_food')->where('id',$id)->first();
    	return view('hotel.admin.qm_food.show',['info'=>$info,'cate'=>$category]);
    }
}
