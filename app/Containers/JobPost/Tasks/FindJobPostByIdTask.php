<?php

namespace App\Containers\JobPost\Tasks;

use App\Containers\JobPost\Data\Repositories\JobPostRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindJobPostByIdTask extends Task
{

    protected $repository;

    public function __construct(JobPostRepository $repository)
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
