<?php

namespace App\Containers\DailyReport\Tasks;

use App\Containers\DailyReport\Data\Repositories\DailyReportRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateDailyReportTask extends Task
{

    protected $repository;

    public function __construct(DailyReportRepository $repository)
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
