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
}
