<?php

namespace App\Http\Controllers\Hotel\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use session;
class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
    	$data = $request ->except('_token');
    	if(!session('gid'))
    	{
    		return view('hotel.home.register.index');
    	}
	}
	public function design()
	{
		if(!session('gid'))
		{
			return view('hotel.home.login.index');
		}
	}
}
