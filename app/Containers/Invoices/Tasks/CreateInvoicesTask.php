<?php

namespace App\Containers\Invoices\Tasks;

use App\Containers\Invoices\Data\Repositories\InvoicesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateInvoicesTask extends Task
{

    protected $repository;

    public function __construct(InvoicesRepository $repository)
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
