<?php

namespace App\Containers\ServiceApprovals\Tasks;

use App\Containers\ServiceApprovals\Data\Repositories\ServiceApprovalsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllServiceApprovalsTask extends Task
{

    protected $repository;

    public function __construct(ServiceApprovalsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
