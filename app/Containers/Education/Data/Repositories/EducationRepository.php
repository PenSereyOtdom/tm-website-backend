<?php

namespace App\Containers\Education\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class EducationRepository
 */
class EducationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
