<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HomeController extends Controller
{
    //
    public function index()
    {	
    	$category = DB::table('qm_category')->get();
    	$list = DB::table('qm_home')->get();
    	return view('hotel.admin.qm_home.index',['list'=>$list,'cate'=>$category]);
    }
    public function add()
    {	
    	$category = DB::table('qm_category')->get();
    	return view('hotel.admin.qm_home.add',['cate'=>$category]);
    }
    public function doAdd(Request $request)
    {
    	$data = $request -> except('_token');
    	$count = DB::table('qm_home')->where('floor',$data['floor'])->count();
    	$number = $data['floor'] * 1000 + $count + 1;
//     	dd($data);
    	if($request -> hasFile('pic'))
    	{
    		if($request -> file('pic') -> isValid())
    		{
    			$extension = $request -> file('pic') -> getClientOriginalExtension();
    			$filename = mt_rand(1000000,9999999).'.'.$extension;
    			$dir = './uploads/avatar/home/';
    			$request -> file('pic') -> move($dir,$filename);//storeAs
    			$pic = '/uploads/avatar/home/'.$filename;
    		}
    	}else
    	{
    		$pic = '/uploads/avatar/home/default.jpg';
    	}
    	$res = DB::table('qm_home')->insert(['name'=>$data['name'],'cid'=>$data['cid'],'is_food'=>$data['is_food'],'is_onsale'=>$data['is_onsale'],
    			'is_clean'=>$data['is_clean'],'is_window'=>$data['is_window'],'price'=>$data['price'],'count'=>$data['count'],'floor'=>$data['floor'],
    			'pic'=>$pic,'description'=>$data['description'],'number'=>$number
    	]);
    	if($res)
    	{
    		$category = DB::table('qm_category')->get();
    		$list = DB::table('qm_home')->get();
    		return view('hotel.admin.qm_home.index',['list'=>$list,'cate'=>$category]);
    	}
    }
    public function edit($id)
    {	
    	$category = DB::table('qm_category')->get();
    	$info = DB::table('qm_home')->where('id',$id)->first();
    	return view('hotel.admin.qm_home.edit',['info'=>$info,'cate'=>$category]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request ->except('_token');
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
    				$pic = '/uploads/avatar/home/'.$filename;
    			}
    		}else
    		{
    			$pic = '/uploads/avatar/home/default.jpg';
    		}
    	}else
    	{
    		$pic = $data['ifpic'];
    	}
    	$homeinfo = DB::table('qm_home')->where('id',$data['id'])->first();
    	$floor = $homeinfo->floor;
    	if($floor == $data['floor'])
    	{
    		$number = $homeinfo->number;
    	}else
    	{
    		$count = DB::table('qm_home')->where('floor',$data['floor'])->count();
    		$number = $data['floor'] * 1000 + $count + 1;
    	}
    	$res = DB::table('qm_home')->where('id',$data['id'])->update(['name'=>$data['name'],'cid'=>$data['cid'],'is_food'=>$data['is_food'],'is_onsale'=>$data['is_onsale'],
    			'is_clean'=>$data['is_clean'],'description'=>$data['description'],'is_window'=>$data['is_window'],'price'=>$data['price'],'count'=>$data['count'],'floor'=>$data['floor'],'pic'=>$pic,'number'=>$number
    	]);
//     	dd($pic);
//     	dd($res);
    	if($res)
    	{
    		$category = DB::table('qm_category')->get();
    		$list = DB::table('qm_home')->get();
    		return view('hotel.admin.qm_home.index',['list'=>$list,'cate'=>$category]);
    	}
    	else{
    		
    	}
    }
    public function delete($id)
    {
    	$res = DB::table('qm_home')->where('id',$id)->delete();
    	$category = DB::table('qm_category')->get();
    	$list = DB::table('qm_home')->get();
    	return view('hotel.admin.qm_home.index',['list'=>$list,'cate'=>$category]);
    }
    public function show($id)
    {	
    	$category = DB::table('qm_category')->get();
    	$info = DB::table('qm_home')->where('id',$id)->first();
    	return view('hotel.admin.qm_home.show',['info'=>$info,'cate'=>$category]);
    }
}
