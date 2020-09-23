<?php

namespace App\Containers\SaveJob\Tasks;

use App\Containers\SaveJob\Data\Repositories\SaveJobRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSaveJobByIdTask extends Task
{

    protected $repository;

    public function __construct(SaveJobRepository $repository)
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
