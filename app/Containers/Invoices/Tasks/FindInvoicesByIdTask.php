<?php

namespace App\Containers\Invoices\Tasks;

use App\Containers\Invoices\Data\Repositories\InvoicesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindInvoicesByIdTask extends Task
{

    protected $repository;

    public function __construct(InvoicesRepository $repository)
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
