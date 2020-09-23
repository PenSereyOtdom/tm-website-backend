<?php

namespace App\Containers\Carrers\Tasks;

use App\Containers\Carrers\Data\Repositories\CarrersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCarrersTask extends Task
{

    protected $repository;

    public function __construct(CarrersRepository $repository)
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
