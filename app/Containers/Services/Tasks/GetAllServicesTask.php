<?php

namespace App\Containers\Services\Tasks;

use App\Containers\Services\Data\Repositories\ServicesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllServicesTask extends Task
{

    protected $repository;

    public function __construct(ServicesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
