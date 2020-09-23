<?php

namespace App\Containers\ExperienceLevels\Tasks;

use App\Containers\ExperienceLevels\Data\Repositories\ExperienceLevelsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateExperienceLevelsTask extends Task
{

    protected $repository;

    public function __construct(ExperienceLevelsRepository $repository)
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
