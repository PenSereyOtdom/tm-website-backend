<?php

namespace App\Containers\JobClassifications\Tasks;

use App\Containers\JobClassifications\Data\Repositories\JobClassificationsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllJobClassificationsTask extends Task
{

    protected $repository;

    public function __construct(JobClassificationsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
