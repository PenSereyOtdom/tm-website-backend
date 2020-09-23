<?php

namespace App\Containers\Education\Tasks;

use App\Containers\Education\Data\Repositories\EducationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllEducationTask extends Task
{

    protected $repository;

    public function __construct(EducationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
