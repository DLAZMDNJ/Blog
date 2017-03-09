<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    //
    public function index()
    {
    	$data = DB::table('blog_user')->get();
    	return view('admin.user.index',['data'=> $data]);
    }
    public function add()
    {
    	return view('admin.user.add');
    }
    public function doAdd(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('blog_user')->insert($data);
    	$data = DB::table('blog_user')->get();
    	return view('admin.user.index',['data'=> $data]);
    	
    }
    public function edit($id)
    {
    	$userinfo = DB::table('blog_user')->where('id',$id)->first();
    	return view('admin.user.edit',['userinfo' => $userinfo]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('blog_user')->where('id',$data['id'])->update($data);
    	$data = DB::table('blog_user')->get();
    	return view('admin.user.index',['data'=> $data]);
    }
    public function delete($id)
    {
    	DB::table('blog_user')->where('id',$id)->delete();
    	$data = DB::table('blog_user')->get();
    	return view('admin.user.index',['data'=>$data]);
    }
}
