<?php

namespace App\Containers\Invoices\Tasks;

use App\Containers\Invoices\Data\Repositories\InvoicesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllInvoicesTask extends Task
{

    protected $repository;

    public function __construct(InvoicesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
