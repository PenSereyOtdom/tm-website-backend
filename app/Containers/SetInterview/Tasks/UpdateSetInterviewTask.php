<?php

namespace App\Containers\SetInterview\Tasks;

use App\Containers\SetInterview\Data\Repositories\SetInterviewRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSetInterviewTask extends Task
{

    protected $repository;

    public function __construct(SetInterviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
