<?php

namespace App\Containers\Experiences\Tasks;

use App\Containers\Experiences\Data\Repositories\ExperiencesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateExperiencesTask extends Task
{

    protected $repository;

    public function __construct(ExperiencesRepository $repository)
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
