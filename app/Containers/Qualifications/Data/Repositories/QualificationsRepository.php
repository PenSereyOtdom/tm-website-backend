<?php

namespace App\Containers\Qualifications\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class QualificationsRepository
 */
class QualificationsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
