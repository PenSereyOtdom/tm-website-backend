<?php

namespace App\Containers\SalaryRanges\Tasks;

use App\Containers\SalaryRanges\Data\Repositories\SalaryRangesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSalaryRangesByIdTask extends Task
{

    protected $repository;

    public function __construct(SalaryRangesRepository $repository)
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
