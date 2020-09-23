<?php

namespace App\Containers\BusinessIndustries\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BusinessIndustriesRepository
 */
class BusinessIndustriesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
