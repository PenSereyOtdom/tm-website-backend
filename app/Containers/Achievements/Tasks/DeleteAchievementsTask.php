<?php

namespace App\Containers\Achievements\Tasks;

use App\Containers\Achievements\Data\Repositories\AchievementsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAchievementsTask extends Task
{

    protected $repository;

    public function __construct(AchievementsRepository $repository)
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
