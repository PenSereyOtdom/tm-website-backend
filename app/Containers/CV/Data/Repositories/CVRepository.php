<?php

namespace App\Containers\CV\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CVRepository
 */
class CVRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
