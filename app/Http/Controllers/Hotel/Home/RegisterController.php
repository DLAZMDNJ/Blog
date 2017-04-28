<?php

namespace App\Http\Controllers\Hotel\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('hotel.home.register.index');
    }
    public function add(Request $request)
    {
    	$data = $request->except('_token');
    	dd($data);
    }
}
