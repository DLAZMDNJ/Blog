<?php 
namespace App\Repositories;
use App\Models\friends;


class FriendsRepository extends SunRepository
{
	public function __construct(friends $friends)
	{
		$this->model = $friends;
		$this->user = $friends;
	}
}
