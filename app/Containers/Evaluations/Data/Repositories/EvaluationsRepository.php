<?php

namespace App\Containers\Evaluations\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class EvaluationsRepository
 */
class EvaluationsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
