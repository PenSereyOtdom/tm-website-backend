<?php

namespace App\Containers\Experiences\Tasks;

use App\Containers\Experiences\Data\Repositories\ExperiencesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteExperiencesTask extends Task
{

    protected $repository;

    public function __construct(ExperiencesRepository $repository)
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
