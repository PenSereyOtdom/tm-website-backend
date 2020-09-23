<?php

namespace App\Containers\ContractForm\Tasks;

use App\Containers\ContractForm\Data\Repositories\ContractFormRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllContractFormsTask extends Task
{

    protected $repository;

    public function __construct(ContractFormRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
