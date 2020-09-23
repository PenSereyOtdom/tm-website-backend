<?php

namespace App\Containers\Experiences\Tasks;

use App\Containers\Experiences\Data\Repositories\ExperiencesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllExperiencesTask extends Task
{

    protected $repository;

    public function __construct(ExperiencesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
