<?php

namespace App\Containers\JobPost\Tasks;

use App\Containers\JobPost\Data\Repositories\JobPostRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllJobPostsTask extends Task
{

    protected $repository;

    public function __construct(JobPostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
