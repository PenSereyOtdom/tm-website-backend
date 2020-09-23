<?php

namespace App\Containers\JobPost\Tasks;

use App\Containers\JobPost\Data\Repositories\JobPostRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteJobPostTask extends Task
{

    protected $repository;

    public function __construct(JobPostRepository $repository)
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
