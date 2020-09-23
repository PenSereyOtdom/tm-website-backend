<?php

namespace App\Containers\JobTypes\Tasks;

use App\Containers\JobTypes\Data\Repositories\JobTypesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteJobTypesTask extends Task
{

    protected $repository;

    public function __construct(JobTypesRepository $repository)
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
