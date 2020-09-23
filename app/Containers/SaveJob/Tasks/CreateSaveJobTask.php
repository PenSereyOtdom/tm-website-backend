<?php

namespace App\Containers\SaveJob\Tasks;

use App\Containers\SaveJob\Data\Repositories\SaveJobRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSaveJobTask extends Task
{

    protected $repository;

    public function __construct(SaveJobRepository $repository)
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
