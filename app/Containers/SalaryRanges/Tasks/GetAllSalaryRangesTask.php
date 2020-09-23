<?php

namespace App\Containers\SalaryRanges\Tasks;

use App\Containers\SalaryRanges\Data\Repositories\SalaryRangesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSalaryRangesTask extends Task
{

    protected $repository;

    public function __construct(SalaryRangesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
