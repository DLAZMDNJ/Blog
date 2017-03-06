<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class MessageController extends Controller
{
    //
    public function index()
    {	
    	$inter = DB::table('blog_interest')->get();
    	return view('admin.message.index',['data' => $inter]);
    }
    public function add()
    {
    	return view('admin.message.add');
    }
    public function doAdd(Request $request)
    {
		    	$a = $request->except('_token');
		    	var_dump($a);
    }
}
