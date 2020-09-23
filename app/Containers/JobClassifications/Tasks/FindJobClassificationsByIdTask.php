<?php

namespace App\Containers\JobClassifications\Tasks;

use App\Containers\JobClassifications\Data\Repositories\JobClassificationsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindJobClassificationsByIdTask extends Task
{

    protected $repository;

    public function __construct(JobClassificationsRepository $repository)
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
