<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Faker\Provider\Base;

class SunController extends BaseController
{
    //
	public function __construct()
	{
	
	}
	protected function repo(){
		return $this->repo;
	}
	//项目名
	protected function mis(){
		return 'mis';
	}
	
	//模块名
	protected function mn(){
		return $this->repo()->mn();
	}
}
