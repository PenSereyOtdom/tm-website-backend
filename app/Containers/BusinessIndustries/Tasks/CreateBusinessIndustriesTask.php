<?php

namespace App\Containers\BusinessIndustries\Tasks;

use App\Containers\BusinessIndustries\Data\Repositories\BusinessIndustriesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBusinessIndustriesTask extends Task
{

    protected $repository;

    public function __construct(BusinessIndustriesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
