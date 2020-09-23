<?php

namespace App\Containers\Languages\Tasks;

use App\Containers\Languages\Data\Repositories\LanguagesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllLanguagesTask extends Task
{

    protected $repository;

    public function __construct(LanguagesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
