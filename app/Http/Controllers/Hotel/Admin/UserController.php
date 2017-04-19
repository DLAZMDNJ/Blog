<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
  
    public function index()
    {
    	$list = DB::table('qm_user')->get();
    	return view('hotel.admin.qm_user.list',['list'=>$list]);
    }
    public function edit($id)
    {
    	$status = DB::table('qm_user')->where('id',$id)->first()->status;
    	
    	if($status == 1)
    	{	
    		
    		$res = DB::table('qm_user')->where('id',$id)->update(['status' => '0']);
    		if($res)
    		{
    			$list = DB::table('qm_user')->get();
    			
    			return view('hotel.admin.qm_user.list',['list'=>$list]);
    		}
    	}
    	if($status == 0)
    	{
    		$res = DB::table('qm_user')->where('id',$id)->update(['status' => '1']);
    		if($res)
    		{
    			$list = DB::table('qm_user')->get();
    			return view('hotel.admin.qm_user.list',['list'=>$list]);
    		}
    	}
    }
    public function show($id)
    {
    	$info = DB::table('qm_user')->where('id',$id)->first();
    	return view('hotel.admin.qm_user.show',['info'=>$info]);
    }
    public function delete($id)
    {
    	$res = DB::table('qm_user')->where('id',$id)->delete();
    	$list = DB::table('qm_user')->get();
    	return view('hotel.admin.qm_user.list',['list'=>$list]);
    }
}
