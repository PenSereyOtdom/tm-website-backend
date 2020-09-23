<?php

namespace App\Containers\ContractForm\Tasks;

use App\Containers\ContractForm\Data\Repositories\ContractFormRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateContractFormTask extends Task
{

    protected $repository;

    public function __construct(ContractFormRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
