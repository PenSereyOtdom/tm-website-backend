<?php

namespace App\Containers\DailyReport\Tasks;

use App\Containers\DailyReport\Data\Repositories\DailyReportRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateDailyReportTask extends Task
{

    protected $repository;

    public function __construct(DailyReportRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
