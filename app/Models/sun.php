<?php 
namespace App\Models;
use Eloquent;
use DB;
class sun extends Eloquent
{
	protected $guarded = array('_token','mn');
	public function table()
	{
		$table = $this->table;
		return $table;
	}
	public function mn(){
		$table = $this->table;
		if(substr($table,0,6)=='admin_'){
			$mn = substr($table,6);
		}else{
			$mn = $table;
		}
		return $mn;
	}
	
	public function pk(){
		return $this->primaryKey;
	}
}