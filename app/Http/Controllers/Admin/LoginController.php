<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('admin.login.login');
    }
    public function doLogin(Request $request)
    {
    	$data = $request->except('_token');
    	$userinfo = DB::table('blog_user')->where('name',$data['name'])->first();
    	if(!$userinfo)
    	{
    		return redirect('/login');
    	}
    	if($userinfo->password != $data['pwd'])
    	{	
    		return redirect('/login');
  		
    	}
    	session(['nickname' =>$userinfo->nickname]);
    	session(['username' =>$userinfo->name]); 	
    	return view('admin.index');

    }
}
