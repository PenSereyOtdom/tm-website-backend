<?php

namespace App\Containers\Master\Tasks;

use App\Containers\Master\Data\Repositories\MasterRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMastersTask extends Task
{

    protected $repository;

    public function __construct(MasterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
