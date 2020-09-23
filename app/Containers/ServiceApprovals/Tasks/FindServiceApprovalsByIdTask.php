<?php

namespace App\Containers\ServiceApprovals\Tasks;

use App\Containers\ServiceApprovals\Data\Repositories\ServiceApprovalsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindServiceApprovalsByIdTask extends Task
{

    protected $repository;

    public function __construct(ServiceApprovalsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
