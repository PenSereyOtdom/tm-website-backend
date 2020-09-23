<?php

namespace App\Containers\BusinessIndustries\Tasks;

use App\Containers\BusinessIndustries\Data\Repositories\BusinessIndustriesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBusinessIndustriesTask extends Task
{

    protected $repository;

    public function __construct(BusinessIndustriesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
