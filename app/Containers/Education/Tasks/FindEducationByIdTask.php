<?php

namespace App\Containers\Education\Tasks;

use App\Containers\Education\Data\Repositories\EducationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindEducationByIdTask extends Task
{

    protected $repository;

    public function __construct(EducationRepository $repository)
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
