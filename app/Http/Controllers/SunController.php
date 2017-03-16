<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Faker\Provider\Base;

class SunController extends BaseController
{	
	protected $friends;
	protected $mn;
	public function __construct()
	{
		
		
	}
	protected function friends(){
		return $this->friends;
	}
	//模块名
	protected function mn(){
		return $this->friends()->mn();
	}
}
