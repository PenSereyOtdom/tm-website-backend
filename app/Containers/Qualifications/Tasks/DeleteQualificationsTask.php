<?php

namespace App\Containers\Qualifications\Tasks;

use App\Containers\Qualifications\Data\Repositories\QualificationsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteQualificationsTask extends Task
{

    protected $repository;

    public function __construct(QualificationsRepository $repository)
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
