<?php 

namespace App\Repositories;

use App\Account;

class AccountRepository extends ResourceRepository
{
    public function __construct(Account $account)
	{
		$this->model = $account;
	}

	public function getUserAccount($user_id)
	{
		return $this->model->where('user_id', '=', $user_id)->with('user')->with('currency')->with('account_type')->get();
	}
}