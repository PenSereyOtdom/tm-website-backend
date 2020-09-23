<?php

namespace App\Containers\Carrers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CarrersRepository
 */
class CarrersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
