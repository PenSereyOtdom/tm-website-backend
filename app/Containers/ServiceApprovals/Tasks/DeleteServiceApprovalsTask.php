<?php

namespace App\Containers\ServiceApprovals\Tasks;

use App\Containers\ServiceApprovals\Data\Repositories\ServiceApprovalsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteServiceApprovalsTask extends Task
{

    protected $repository;

    public function __construct(ServiceApprovalsRepository $repository)
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
