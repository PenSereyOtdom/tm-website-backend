<?php

namespace App\Containers\ContractForm\Tasks;

use App\Containers\ContractForm\Data\Repositories\ContractFormRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateContractFormTask extends Task
{

    protected $repository;

    public function __construct(ContractFormRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
