<?php

namespace App\Containers\Qualifications\Tasks;

use App\Containers\Qualifications\Data\Repositories\QualificationsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllQualificationsTask extends Task
{

    protected $repository;

    public function __construct(QualificationsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
