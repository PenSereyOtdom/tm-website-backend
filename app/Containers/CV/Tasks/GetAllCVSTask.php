<?php

namespace App\Containers\CV\Tasks;

use App\Containers\CV\Data\Repositories\CVRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCVSTask extends Task
{

    protected $repository;

    public function __construct(CVRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
