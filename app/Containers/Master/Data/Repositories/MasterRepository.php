<?php

namespace App\Containers\Master\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MasterRepository
 */
class MasterRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
