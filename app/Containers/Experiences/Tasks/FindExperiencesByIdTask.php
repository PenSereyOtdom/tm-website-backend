<?php

namespace App\Containers\Experiences\Tasks;

use App\Containers\Experiences\Data\Repositories\ExperiencesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindExperiencesByIdTask extends Task
{

    protected $repository;

    public function __construct(ExperiencesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
