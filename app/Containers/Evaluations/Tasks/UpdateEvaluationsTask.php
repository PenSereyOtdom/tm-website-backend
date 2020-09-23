<?php

namespace App\Containers\Evaluations\Tasks;

use App\Containers\Evaluations\Data\Repositories\EvaluationsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateEvaluationsTask extends Task
{

    protected $repository;

    public function __construct(EvaluationsRepository $repository)
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
