<?php 

namespace App\Repositories;

use App\User;
use DB;

class UserRepository extends ResourceRepository
{
    public function __construct(User $user)
	{
		$this->model = $user;
	}

	public function getById($id)
	{
		return $this->model->with('accounts')->with('beneficiaries')->findOrFail($id);
	}

	public function getNotReadMessages($id)
	{
		return DB::table('messages')->where([
			['read', true],
			['user_id', $id],
			['deleted_at', null],
		])->get();
	}
}