<?php

namespace App\Containers\ExperienceLevels\Tasks;

use App\Containers\ExperienceLevels\Data\Repositories\ExperienceLevelsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindExperienceLevelsByIdTask extends Task
{

    protected $repository;

    public function __construct(ExperienceLevelsRepository $repository)
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
