<?php

namespace App\Containers\Services\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ServicesRepository
 */
class ServicesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
