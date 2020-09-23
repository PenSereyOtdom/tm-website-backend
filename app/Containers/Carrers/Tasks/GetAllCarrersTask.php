<?php

namespace App\Containers\Carrers\Tasks;

use App\Containers\Carrers\Data\Repositories\CarrersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCarrersTask extends Task
{

    protected $repository;

    public function __construct(CarrersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
