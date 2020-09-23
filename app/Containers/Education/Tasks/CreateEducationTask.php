<?php

namespace App\Containers\Education\Tasks;

use App\Containers\Education\Data\Repositories\EducationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateEducationTask extends Task
{

    protected $repository;

    public function __construct(EducationRepository $repository)
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
