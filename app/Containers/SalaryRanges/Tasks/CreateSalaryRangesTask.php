<?php

namespace App\Containers\SalaryRanges\Tasks;

use App\Containers\SalaryRanges\Data\Repositories\SalaryRangesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSalaryRangesTask extends Task
{

    protected $repository;

    public function __construct(SalaryRangesRepository $repository)
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
