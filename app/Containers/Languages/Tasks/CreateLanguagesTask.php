<?php

namespace App\Containers\Languages\Tasks;

use App\Containers\Languages\Data\Repositories\LanguagesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateLanguagesTask extends Task
{

    protected $repository;

    public function __construct(LanguagesRepository $repository)
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
