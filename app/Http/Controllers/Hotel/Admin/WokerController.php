<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class WokerController extends Controller
{
    public function index()
    {	
    	$list = DB::table('qm_woker')->orderBy('number')->get();
    	return view('hotel.admin.qm_woker.list',['list'=>$list]);
    }
    public function add()
    {
    	return view('hotel.admin.qm_woker.add');
    }
    public function doAdd(Request $request)
    {
    	$data = $request ->except('_token');
    	$password = md5($data['password']);
    	$count = DB::table('qm_woker')->where('auth',$data['auth'])->count();
    	$number = $data['auth'] * 1000 + $count + 1;
    	if($request -> hasFile('pic'))
    	{
    		if($request -> file('pic') -> isValid())
    		{
    			$extension = $request -> file('pic') -> getClientOriginalExtension();
    			$filename = mt_rand(1000000,9999999).'.'.$extension;
    			$dir = './uploads/avatar/';   	
    			$request -> file('pic') -> move($dir,$filename);//storeAs
    			$data['pic'] = '/uploads/avatar/'.$filename;
    		}
    	}else
    	{
    		$data['pic'] = '/uploads/avatar/default.jpg';
    	}
    	 
    	$res = DB::table('qm_woker')->insert(['name'=>$data['name'],'pic'=>$data['pic'],'realname'=>$data['realname'],'number'=>$number,'password'=>$password,'time_in'=>
    			$data['time_in'],'sex'=>$data['sex'],'status'=>$data['status'],'auth'=>$data['auth'],'zhiwei'=>$data['zhiwei']
    	]);
    	if($res)
    		{	
    			$list = DB::table('qm_woker')->orderBy('number')->get();
    			return  view('hotel.admin.qm_woker.list',['list'=>$list]);
    		}
    }
    public function edit($id)
    {
    	$info = DB::table('qm_woker')->where('id',$id)->first();
    	return view('hotel.admin.qm_woker.edit',['info' => $info]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request -> except('_token');
    	if($data['password'])
    	{
    		$password = md5($data['password']);
    	}else
    	{
    		$password = $data['ifpassword'];
    	}
    	if($request -> hasFile('pic'))
    	{
    		if($request -> file('pic') -> isValid())
    		{
    			$extension = $request -> file('pic') -> getClientOriginalExtension();
    			$filename = mt_rand(1000000,9999999).'.'.$extension;
    			$dir = './uploads/avatar/';		 
    			$request -> file('pic') -> move($dir,$filename);//storeAs
    			$pic = '/uploads/avatar/'.$filename;
    		}
    	}else
    	{
    		$pic = $data['ifpic'];
    	}
    	$userinfo = DB::table('qm_woker')->where('id',$data['id'])->first();
    	$auth = $userinfo->auth;
    	if($auth == $data['auth'])
    	{	
    		$number = $auth->number;
    	}else{
    		$count = DB::table('qm_woker')->where('auth',$data['auth'])->count();
    		$number = $data['auth'] * 1000 + $count + 1;
    	}
    	$res = DB::table('qm_woker')->where('id',$data['id'])->update([ 'name'=>$data['name'],'realname'=>$data['realname'],
   			'password'=>$password,'pic'=>$pic,'status'=>$data['status'],'auth'=>$data['auth'],'zhiwei'=>$data['zhiwei'],
    			'age'=>$data['age'],'sex'=>$data['sex'],'phone'=>$data['phone'],'address'=>$data['address'],'description'=>$data['description'],
    			'education'=>$data['education'],'id_card'=>$data['id_card'],'wages'=>$data['wages'],'number'=>$number
    	]);
    	if($res)
    	{
    		$list = DB::table('qm_woker')->orderBy('number')->get();
    		return view('hotel.admin.qm_woker.list',['list'=>$list]);
    	}else {
    		$list = DB::table('qm_woker')->orderBy('number')->get();
    		return view('hotel.admin.qm_woker.list',['list'=>$list]);
    	} 		
    }
    public function show($id)
    {
    	$info = DB::table('qm_woker')->where('id',$id)->first();
    	return view('hotel.admin.qm_woker.show',['info' => $info]);
    }
    public function delete($id)
    {
    	$res = DB::table('qm_woker')->where('id',$id)->delete();
    	$list = DB::table('qm_woker')->orderBy('number')->get();
    	return view('hotel.admin.qm_woker.list',['list'=>$list]);	
    }
}
