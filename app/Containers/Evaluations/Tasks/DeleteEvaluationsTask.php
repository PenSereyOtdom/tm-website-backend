<?php

namespace App\Containers\Evaluations\Tasks;

use App\Containers\Evaluations\Data\Repositories\EvaluationsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteEvaluationsTask extends Task
{

    protected $repository;

    public function __construct(EvaluationsRepository $repository)
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
