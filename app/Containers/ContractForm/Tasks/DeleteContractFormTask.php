<?php

namespace App\Containers\ContractForm\Tasks;

use App\Containers\ContractForm\Data\Repositories\ContractFormRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteContractFormTask extends Task
{

    protected $repository;

    public function __construct(ContractFormRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
