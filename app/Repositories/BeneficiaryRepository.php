<?php 

namespace App\Repositories;

use App\Beneficiary;
use DB;

class BeneficiaryRepository extends ResourceRepository
{
    public function __construct(Beneficiary $beneficiary)
	{
		$this->model = $beneficiary;
	}

	// public function getByUser($id)
	// {
	// 	return $this->model->findOrFail($id);
	// }

	// public function store(Array $inputs)
	// {
	// 	return $this->model->create($inputs);
	// }
}