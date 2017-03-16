<?php 

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use DB;

/**
 * 用户模型
 *
 * @author king <king@jinsec.com>
 */
class User extends sun implements AuthenticatableContract, CanResetPasswordContract
{

	use Authenticatable, CanResetPassword;
	use EntrustUserTrait;
	protected $table = 'blog_friends';
	public function mn(){
		return 'user';
	}
}