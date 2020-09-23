<?php

namespace App\Containers\Evaluations\Tasks;

use App\Containers\Evaluations\Data\Repositories\EvaluationsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllEvaluationsTask extends Task
{

    protected $repository;

    public function __construct(EvaluationsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
