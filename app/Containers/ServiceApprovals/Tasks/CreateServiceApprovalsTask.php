<?php

namespace App\Containers\ServiceApprovals\Tasks;

use App\Containers\ServiceApprovals\Data\Repositories\ServiceApprovalsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateServiceApprovalsTask extends Task
{

    protected $repository;

    public function __construct(ServiceApprovalsRepository $repository)
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
