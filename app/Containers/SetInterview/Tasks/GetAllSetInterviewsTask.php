<?php

namespace App\Containers\SetInterview\Tasks;

use App\Containers\SetInterview\Data\Repositories\SetInterviewRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSetInterviewsTask extends Task
{

    protected $repository;

    public function __construct(SetInterviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
