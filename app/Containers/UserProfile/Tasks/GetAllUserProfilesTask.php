<?php

namespace App\Containers\UserProfile\Tasks;

use App\Containers\UserProfile\Data\Repositories\UserProfileRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllUserProfilesTask extends Task
{

    protected $repository;

    public function __construct(UserProfileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
