<?php

namespace App\Containers\JobTypes\Tasks;

use App\Containers\JobTypes\Data\Repositories\JobTypesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateJobTypesTask extends Task
{

    protected $repository;

    public function __construct(JobTypesRepository $repository)
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
