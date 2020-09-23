<?php

namespace App\Containers\Qualifications\Tasks;

use App\Containers\Qualifications\Data\Repositories\QualificationsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindQualificationsByIdTask extends Task
{

    protected $repository;

    public function __construct(QualificationsRepository $repository)
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
