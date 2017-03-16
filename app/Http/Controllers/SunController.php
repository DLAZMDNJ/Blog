<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Faker\Provider\Base;

class SunController extends BaseController
{	
	protected $repo;
	protected $mn;
	public function __construct()
	{
		
		
	}
	protected function repo(){
		return $this->repo;
	}
	//模块名
	protected function mn(){
		return $this->repo()->mn();
	}
}
