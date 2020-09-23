<?php

namespace App\Containers\DailyReport\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class DailyReportRepository
 */
class DailyReportRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
