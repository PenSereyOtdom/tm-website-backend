<?php

namespace App\Containers\ExperienceLevels\Tasks;

use App\Containers\ExperienceLevels\Data\Repositories\ExperienceLevelsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllExperienceLevelsTask extends Task
{

    protected $repository;

    public function __construct(ExperienceLevelsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
