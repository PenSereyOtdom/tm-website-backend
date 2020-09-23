<?php

namespace App\Containers\SetInterview\Tasks;

use App\Containers\SetInterview\Data\Repositories\SetInterviewRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSetInterviewTask extends Task
{

    protected $repository;

    public function __construct(SetInterviewRepository $repository)
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
