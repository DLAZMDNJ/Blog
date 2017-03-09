<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FriendsController extends Controller
{
	public function index()
	{
		$friends = DB::table('blog_friends')->get();
		return view('admin.friends.index',['friends' => $friends]);
	}
	public function add()
	{
		return view('admin.friends.add');
	}
	public function doAdd(Request $request)
	{
		$friends = $request->except('_token');
		DB::table('blog_friends')->insert(['name'=>$friends['name'],'pic'=>$friends['pic'],'dic'=>$friends['dic']]);
		$friends = DB::table('blog_friends')->get();
		return view('admin.friends.index',['friends' => $friends]);
	}
	public function edit($id)
	{
		$friends = DB::table('blog_friends')->where('id',$id)->first();
		return view('admin.friends.edit',['friends' => $friends]);
	}
	public function doEdit(Request $request)
	{
		$friends = $request->except('_token');
		DB::table('blog_friends')->where('id',$friends['id'])->update(['name'=>$friends['name'],'pic'=>$friends['pic'],'dic'=>$friends['dic']]);
		$friends = DB::table('blog_friends')->get();
		return view('admin.friends.index',['friends' => $friends]);
	}
	public function delete($id)
	{
		DB::table('blog_friends')->where('id',$id)->delete();
		$friends = DB::table('blog_friends')->get();
		return view('admin.friends.index',['friends' => $friends]);
	}
}
