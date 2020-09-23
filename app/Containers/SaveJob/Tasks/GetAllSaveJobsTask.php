<?php

namespace App\Containers\SaveJob\Tasks;

use App\Containers\SaveJob\Data\Repositories\SaveJobRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSaveJobsTask extends Task
{

    protected $repository;

    public function __construct(SaveJobRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
