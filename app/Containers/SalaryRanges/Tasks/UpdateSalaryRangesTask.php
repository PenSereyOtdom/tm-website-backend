<?php

namespace App\Containers\SalaryRanges\Tasks;

use App\Containers\SalaryRanges\Data\Repositories\SalaryRangesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSalaryRangesTask extends Task
{

    protected $repository;

    public function __construct(SalaryRangesRepository $repository)
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
