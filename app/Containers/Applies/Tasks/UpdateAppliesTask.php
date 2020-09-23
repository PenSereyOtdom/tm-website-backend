<?php

namespace App\Containers\Applies\Tasks;

use App\Containers\Applies\Data\Repositories\AppliesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateAppliesTask extends Task
{

    protected $repository;

    public function __construct(AppliesRepository $repository)
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
