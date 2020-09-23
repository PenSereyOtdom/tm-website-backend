<?php

namespace App\Containers\JobClassifications\Tasks;

use App\Containers\JobClassifications\Data\Repositories\JobClassificationsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateJobClassificationsTask extends Task
{

    protected $repository;

    public function __construct(JobClassificationsRepository $repository)
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
