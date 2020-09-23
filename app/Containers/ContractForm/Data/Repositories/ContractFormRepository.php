<?php

namespace App\Containers\ContractForm\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ContractFormRepository
 */
class ContractFormRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
