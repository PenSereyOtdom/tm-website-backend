<?php

namespace App\Containers\Achievements\Tasks;

use App\Containers\Achievements\Data\Repositories\AchievementsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateAchievementsTask extends Task
{

    protected $repository;

    public function __construct(AchievementsRepository $repository)
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
