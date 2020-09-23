<?php

namespace App\Containers\JobTypes\Tasks;

use App\Containers\JobTypes\Data\Repositories\JobTypesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindJobTypesByIdTask extends Task
{

    protected $repository;

    public function __construct(JobTypesRepository $repository)
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
