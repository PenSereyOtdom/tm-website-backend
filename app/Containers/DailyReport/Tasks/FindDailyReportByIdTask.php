<?php

namespace App\Containers\DailyReport\Tasks;

use App\Containers\DailyReport\Data\Repositories\DailyReportRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDailyReportByIdTask extends Task
{

    protected $repository;

    public function __construct(DailyReportRepository $repository)
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
