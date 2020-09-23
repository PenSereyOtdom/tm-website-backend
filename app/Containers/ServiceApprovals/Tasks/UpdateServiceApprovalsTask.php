<?php

namespace App\Containers\ServiceApprovals\Tasks;

use App\Containers\ServiceApprovals\Data\Repositories\ServiceApprovalsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateServiceApprovalsTask extends Task
{

    protected $repository;

    public function __construct(ServiceApprovalsRepository $repository)
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
