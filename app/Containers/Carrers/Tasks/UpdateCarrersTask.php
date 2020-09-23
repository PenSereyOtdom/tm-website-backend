<?php

namespace App\Containers\Carrers\Tasks;

use App\Containers\Carrers\Data\Repositories\CarrersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCarrersTask extends Task
{

    protected $repository;

    public function __construct(CarrersRepository $repository)
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
