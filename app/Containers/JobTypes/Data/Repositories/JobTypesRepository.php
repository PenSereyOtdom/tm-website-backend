<?php

namespace App\Containers\JobTypes\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class JobTypesRepository
 */
class JobTypesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
