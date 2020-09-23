<?php

namespace App\Containers\Languages\Tasks;

use App\Containers\Languages\Data\Repositories\LanguagesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateLanguagesTask extends Task
{

    protected $repository;

    public function __construct(LanguagesRepository $repository)
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
