<?php

namespace App\Containers\Achievements\Tasks;

use App\Containers\Achievements\Data\Repositories\AchievementsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAchievementsTask extends Task
{

    protected $repository;

    public function __construct(AchievementsRepository $repository)
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
