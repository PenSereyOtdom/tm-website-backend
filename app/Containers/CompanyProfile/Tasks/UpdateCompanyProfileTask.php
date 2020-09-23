<?php

namespace App\Containers\CompanyProfile\Tasks;

use App\Containers\CompanyProfile\Data\Repositories\CompanyProfileRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCompanyProfileTask extends Task
{

    protected $repository;

    public function __construct(CompanyProfileRepository $repository)
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
