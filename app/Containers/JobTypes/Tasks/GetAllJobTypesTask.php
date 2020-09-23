<?php

namespace App\Containers\JobTypes\Tasks;

use App\Containers\JobTypes\Data\Repositories\JobTypesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllJobTypesTask extends Task
{

    protected $repository;

    public function __construct(JobTypesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
