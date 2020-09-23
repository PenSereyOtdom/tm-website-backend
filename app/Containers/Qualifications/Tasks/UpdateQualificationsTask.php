<?php

namespace App\Containers\Qualifications\Tasks;

use App\Containers\Qualifications\Data\Repositories\QualificationsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateQualificationsTask extends Task
{

    protected $repository;

    public function __construct(QualificationsRepository $repository)
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
