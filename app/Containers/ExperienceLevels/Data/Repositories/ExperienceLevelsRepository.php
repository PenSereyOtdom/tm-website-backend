<?php

namespace App\Containers\ExperienceLevels\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ExperienceLevelsRepository
 */
class ExperienceLevelsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
