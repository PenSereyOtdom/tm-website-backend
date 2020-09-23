<?php

namespace App\Containers\ServiceApprovals\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ServiceApprovalsRepository
 */
class ServiceApprovalsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
