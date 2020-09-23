<?php

namespace App\Containers\Applies\Tasks;

use App\Containers\Applies\Data\Repositories\AppliesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAppliesByIdTask extends Task
{

    protected $repository;

    public function __construct(AppliesRepository $repository)
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
