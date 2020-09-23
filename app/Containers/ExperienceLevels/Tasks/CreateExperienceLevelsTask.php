<?php

namespace App\Containers\ExperienceLevels\Tasks;

use App\Containers\ExperienceLevels\Data\Repositories\ExperienceLevelsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateExperienceLevelsTask extends Task
{

    protected $repository;

    public function __construct(ExperienceLevelsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
