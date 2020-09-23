<?php

namespace App\Containers\JobPost\Tasks;

use App\Containers\JobPost\Data\Repositories\JobPostRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateJobPostTask extends Task
{

    protected $repository;

    public function __construct(JobPostRepository $repository)
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
