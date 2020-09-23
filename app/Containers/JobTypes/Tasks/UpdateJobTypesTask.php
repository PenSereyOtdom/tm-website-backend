<?php

namespace App\Containers\JobTypes\Tasks;

use App\Containers\JobTypes\Data\Repositories\JobTypesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateJobTypesTask extends Task
{

    protected $repository;

    public function __construct(JobTypesRepository $repository)
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
