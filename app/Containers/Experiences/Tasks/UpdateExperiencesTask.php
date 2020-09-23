<?php

namespace App\Containers\Experiences\Tasks;

use App\Containers\Experiences\Data\Repositories\ExperiencesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateExperiencesTask extends Task
{

    protected $repository;

    public function __construct(ExperiencesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
