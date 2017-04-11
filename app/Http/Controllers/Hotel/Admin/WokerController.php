<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class WokerController extends Controller
{
    //
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
    	$count = DB::table('qm_woker')->count();
    	$number = $data['auth'] * 1000 + $count + 1;
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
}
