<?php 

namespace App\Models;



use DB;

/**
 * 用户模型
 *
 * @author king <king@jinsec.com>
 */
class friends extends sun 
{

	
	protected $table = 'blog_friends';
	public $timestamps = false;
	protected $primaryKey = 'id';
	public function mn()
	{
		return 'friends';
	}
}