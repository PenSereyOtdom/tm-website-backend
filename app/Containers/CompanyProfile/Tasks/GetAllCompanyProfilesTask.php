<?php

namespace App\Containers\CompanyProfile\Tasks;

use App\Containers\CompanyProfile\Data\Repositories\CompanyProfileRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCompanyProfilesTask extends Task
{

    protected $repository;

    public function __construct(CompanyProfileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
