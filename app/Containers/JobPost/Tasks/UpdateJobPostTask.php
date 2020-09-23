<?php

namespace App\Containers\JobPost\Tasks;

use App\Containers\JobPost\Data\Repositories\JobPostRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateJobPostTask extends Task
{

    protected $repository;

    public function __construct(JobPostRepository $repository)
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
