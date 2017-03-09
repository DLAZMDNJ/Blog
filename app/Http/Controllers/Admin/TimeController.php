<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class TimeController extends Controller
{
	//
	public function index()
	{
		$time = DB::table('blog_time')->get();
		return view('admin.time.index',['time'=>$time]);
	}
	public function add()
	{
		return view('admin.time.add');
	}
	public function doAdd(Request $request)
	{
		$data = $request->except('_token');
		DB::table('blog_time')->insert($data);
		$time = DB::table('blog_time')->get();
		return view('admin.time.index',['time'=>$time]);
	}
	public function delete($id)
	{
		DB::table('blog_time')->where('id',$id)->delete();
		$time = DB::table('blog_time')->get();
		return view('admin.time.index',['time'=>$time]);
	}
	public function edit($id)
	{
		$time = DB::table('blog_time')->where('id',$id)->first();
		return view('admin.time.edit',['time'=>$time]);
	}
	public function doEdit(Request $request)
	{
		$data = $request->except('_token');
		DB::table('blog_time')->where('id',$data['id'])->update($data);
		$time = DB::table('blog_time')->get();
		return view('admin.time.index',['time'=>$time]);
	}
}
