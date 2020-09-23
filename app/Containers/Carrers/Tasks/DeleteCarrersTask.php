<?php

namespace App\Containers\Carrers\Tasks;

use App\Containers\Carrers\Data\Repositories\CarrersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCarrersTask extends Task
{

    protected $repository;

    public function __construct(CarrersRepository $repository)
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
