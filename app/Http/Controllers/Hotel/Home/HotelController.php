<?php

namespace App\Http\Controllers\Hotel\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    //
    public function index()
    {
    	return view('hotel.home.hotel.index');
    }
}
