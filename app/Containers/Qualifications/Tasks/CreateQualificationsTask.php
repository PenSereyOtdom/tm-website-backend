<?php

namespace App\Containers\Qualifications\Tasks;

use App\Containers\Qualifications\Data\Repositories\QualificationsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateQualificationsTask extends Task
{

    protected $repository;

    public function __construct(QualificationsRepository $repository)
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
