<?php

namespace App\Containers\SaveJob\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SaveJobRepository
 */
class SaveJobRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
