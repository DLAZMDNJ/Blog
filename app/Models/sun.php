<?php 
namespace App\Models;
use Eloquent;
use DB;
class sun extends Eloquent
{
	protected $guarded = array('_token','mn');
	public function table(){
		$table = $this->table;
		return $table;
	}
}