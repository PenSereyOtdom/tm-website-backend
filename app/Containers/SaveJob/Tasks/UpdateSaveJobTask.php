<?php

namespace App\Containers\SaveJob\Tasks;

use App\Containers\SaveJob\Data\Repositories\SaveJobRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSaveJobTask extends Task
{

    protected $repository;

    public function __construct(SaveJobRepository $repository)
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
