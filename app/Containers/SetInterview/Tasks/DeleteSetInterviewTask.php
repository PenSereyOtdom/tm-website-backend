<?php

namespace App\Containers\SetInterview\Tasks;

use App\Containers\SetInterview\Data\Repositories\SetInterviewRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSetInterviewTask extends Task
{

    protected $repository;

    public function __construct(SetInterviewRepository $repository)
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
