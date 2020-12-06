<?php 

namespace App\Repositories;

use App\Account;
use DB;

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

	public function getUserTransferAccount($user_id, $account_number)
	{
		return $this->model->where('number', '=', $account_number)->where('user_id', '=', $user_id)->with('user')->with('currency')->with('account_type')->with('oppositions')->first();
	}
}