<?php

namespace App\Containers\Evaluations\Tasks;

use App\Containers\Evaluations\Data\Repositories\EvaluationsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindEvaluationsByIdTask extends Task
{

    protected $repository;

    public function __construct(EvaluationsRepository $repository)
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
