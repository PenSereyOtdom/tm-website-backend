<?php

namespace App\Containers\JobClassifications\Tasks;

use App\Containers\JobClassifications\Data\Repositories\JobClassificationsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateJobClassificationsTask extends Task
{

    protected $repository;

    public function __construct(JobClassificationsRepository $repository)
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
