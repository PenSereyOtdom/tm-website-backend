<?php

namespace App\Containers\Education\Tasks;

use App\Containers\Education\Data\Repositories\EducationRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteEducationTask extends Task
{

    protected $repository;

    public function __construct(EducationRepository $repository)
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
