<?php

namespace App\Containers\Applies\Tasks;

use App\Containers\Applies\Data\Repositories\AppliesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAppliesTask extends Task
{

    protected $repository;

    public function __construct(AppliesRepository $repository)
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
