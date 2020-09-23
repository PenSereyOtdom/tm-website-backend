<?php

namespace App\Containers\JobClassifications\Tasks;

use App\Containers\JobClassifications\Data\Repositories\JobClassificationsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteJobClassificationsTask extends Task
{

    protected $repository;

    public function __construct(JobClassificationsRepository $repository)
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
