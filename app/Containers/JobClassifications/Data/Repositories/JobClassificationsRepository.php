<?php

namespace App\Containers\JobClassifications\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class JobClassificationsRepository
 */
class JobClassificationsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
