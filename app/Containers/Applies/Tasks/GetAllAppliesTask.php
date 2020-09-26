<?php

namespace App\Containers\Applies\Tasks;
use App\Containers\Applies\Data\Criterias\RoleCriteria;
use App\Ship\Criterias\Eloquent\OrderByCreationDateDescendingCriteria;
use App\Containers\Applies\Data\Repositories\AppliesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAppliesTask extends Task
{

    protected $repository;

    public function __construct(AppliesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }

    public function ordered()
    {
        $this->repository->pushCriteria(new OrderByCreationDateDescendingCriteria());
    }
}
