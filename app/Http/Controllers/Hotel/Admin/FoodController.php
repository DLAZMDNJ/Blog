<?php

namespace App\Http\Controllers\Hotel\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class FoodController extends Controller
{
    //
    public function index()
    {	
    	$cate = DB::table('qm_foodcategory')->get();
    	$list = DB::table('qm_food')->get();
    	return view('hotel.admin.qm_food.index',['list'=>$list,'cate'=>$cate]);	
    }
    public function add()
    {
    	$cate = DB::table('qm_foodcategory')->get();
    	return view('hotel.admin.qm_food.add',['cate'=>$cate]);
    }
}
