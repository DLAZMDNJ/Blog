<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Repositories\FriendsRepository;
class FriendsController extends BackController
{	
	public function __construct(FriendsController $firends)
	{
		parent::__construct();
		$this->friends = $friends;
	}
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
		DB::table('blog_friends')->insert($friends);
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
		DB::table('blog_friends')->where('id',$friends['id'])->update(['name'=>$friends['name'],'sex'=>$friends['sex'],'pic'=>$friends['pic'],'dis'=>$friends['dis'],'qq'=>$friends['qq'],'wechar'=>$friends['wechar'],'email'=>$friends['email']]);
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
