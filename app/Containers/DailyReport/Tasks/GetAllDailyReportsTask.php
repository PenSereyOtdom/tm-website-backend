<?php

namespace App\Containers\DailyReport\Tasks;

use App\Containers\DailyReport\Data\Repositories\DailyReportRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDailyReportsTask extends Task
{

    protected $repository;

    public function __construct(DailyReportRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
