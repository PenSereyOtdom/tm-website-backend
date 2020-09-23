<?php

namespace App\Containers\CompanyProfile\Tasks;

use App\Containers\CompanyProfile\Data\Repositories\CompanyProfileRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCompanyProfileByIdTask extends Task
{

    protected $repository;

    public function __construct(CompanyProfileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
