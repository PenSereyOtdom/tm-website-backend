<?php

namespace App\Containers\BusinessIndustries\Tasks;

use App\Containers\BusinessIndustries\Data\Repositories\BusinessIndustriesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBusinessIndustriesTask extends Task
{

    protected $repository;

    public function __construct(BusinessIndustriesRepository $repository)
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
