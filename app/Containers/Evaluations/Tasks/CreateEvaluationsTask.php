<?php

namespace App\Containers\Evaluations\Tasks;

use App\Containers\Evaluations\Data\Repositories\EvaluationsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateEvaluationsTask extends Task
{

    protected $repository;

    public function __construct(EvaluationsRepository $repository)
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
