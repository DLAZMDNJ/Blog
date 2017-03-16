<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\SunController;

/**
 * 后台共用控制器
 * BackController
 */
class BackController extends SunController
{
    //
	public function __construct()
	{
	}
	
	protected function mis(){
		return 'admin';
	}
}
