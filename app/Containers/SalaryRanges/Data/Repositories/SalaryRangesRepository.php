<?php

namespace App\Containers\SalaryRanges\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SalaryRangesRepository
 */
class SalaryRangesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
