<?php

namespace App\Containers\SaveJob\Tasks;

use App\Containers\SaveJob\Data\Repositories\SaveJobRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSaveJobTask extends Task
{

    protected $repository;

    public function __construct(SaveJobRepository $repository)
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
