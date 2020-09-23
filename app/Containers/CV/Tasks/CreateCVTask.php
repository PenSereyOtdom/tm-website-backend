<?php

namespace App\Containers\CV\Tasks;

use App\Containers\CV\Data\Repositories\CVRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCVTask extends Task
{

    protected $repository;

    public function __construct(CVRepository $repository)
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
