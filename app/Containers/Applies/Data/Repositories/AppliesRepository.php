<?php

namespace App\Containers\Applies\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AppliesRepository
 */
class AppliesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'company_id' => '=',
        'seeker_id' => '=',
        'jobpost_id' => '='
        // ...
    ];

}
