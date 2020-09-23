<?php

namespace App\Containers\CV\Tasks;

use App\Containers\CV\Data\Repositories\CVRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCVByIdTask extends Task
{

    protected $repository;

    public function __construct(CVRepository $repository)
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
