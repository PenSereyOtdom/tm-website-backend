<?php

namespace App\Containers\SetInterview\Tasks;

use App\Containers\SetInterview\Data\Repositories\SetInterviewRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSetInterviewByIdTask extends Task
{

    protected $repository;

    public function __construct(SetInterviewRepository $repository)
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
