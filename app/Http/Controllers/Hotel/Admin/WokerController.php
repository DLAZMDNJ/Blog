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
    	$data = DB::table('qm_woker')->get();
    	return view('hotel.admin.qm_woker.list',['data'=>$data]);
    }
    public function add()
    {
    	return view('hotel.admin.qm_woker.add');
    }
    public function doAdd(Request $request)
    {
    	$data = $request ->except('_token');
    	dd($data);
    }
}
