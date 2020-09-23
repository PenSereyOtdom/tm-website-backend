<?php

namespace App\Containers\ExperienceLevels\Tasks;

use App\Containers\ExperienceLevels\Data\Repositories\ExperienceLevelsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteExperienceLevelsTask extends Task
{

    protected $repository;

    public function __construct(ExperienceLevelsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
