<?php

namespace App\Containers\BusinessIndustries\Tasks;

use App\Containers\BusinessIndustries\Data\Repositories\BusinessIndustriesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBusinessIndustriesTask extends Task
{

    protected $repository;

    public function __construct(BusinessIndustriesRepository $repository)
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
