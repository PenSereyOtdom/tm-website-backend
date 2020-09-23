<?php

namespace App\Containers\Languages\Tasks;

use App\Containers\Languages\Data\Repositories\LanguagesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteLanguagesTask extends Task
{

    protected $repository;

    public function __construct(LanguagesRepository $repository)
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
