<?php

namespace App\Containers\Achievements\Tasks;

use App\Containers\Achievements\Data\Repositories\AchievementsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAchievementsTask extends Task
{

    protected $repository;

    public function __construct(AchievementsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
