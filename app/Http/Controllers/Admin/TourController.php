<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class TourController extends Controller
{
    //
    public function index()
    {
    	$tour = DB::table('blog_tour')->get();
    	return view('admin.tour.index',['tour'=>$tour]);
    }
    public function add()
    {
    	return view('admin.tour.add');
    }
    public function doAdd(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('blog_tour')->insert($data);
    	$tour = DB::table('blog_tour')->get();
    	return view('admin.tour.index',['tour'=>$tour]);
    }
    public function delete($id)
    {
    	DB::table('blog_tour')->where('id',$id)->delete();
    	$tour = DB::table('blog_tour')->get();
    	return view('admin.tour.index',['tour'=>$tour]);
    }
    public function edit($id)
    {
    	$data = DB::table('blog_tour')->where('id',$id)->first();
    	return view('admin.tour.edit',['data'=>$data]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('blog_tour')->where('id',$data['id'])->update($data);
    	$tour = DB::table('blog_tour')->get();
    	return view('admin.tour.index',['tour'=>$tour]);
    }
}
