<?php

namespace App\Containers\SalaryRanges\Tasks;

use App\Containers\SalaryRanges\Data\Repositories\SalaryRangesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSalaryRangesTask extends Task
{

    protected $repository;

    public function __construct(SalaryRangesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
