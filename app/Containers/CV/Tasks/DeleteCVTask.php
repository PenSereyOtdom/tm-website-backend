<?php

namespace App\Containers\CV\Tasks;

use App\Containers\CV\Data\Repositories\CVRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCVTask extends Task
{

    protected $repository;

    public function __construct(CVRepository $repository)
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
