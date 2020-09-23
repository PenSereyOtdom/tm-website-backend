<?php

namespace App\Containers\Experiences\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ExperiencesRepository
 */
class ExperiencesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
