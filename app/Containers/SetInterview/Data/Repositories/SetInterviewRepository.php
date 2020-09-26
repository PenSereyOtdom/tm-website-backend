<?php

namespace App\Containers\SetInterview\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SetInterviewRepository
 */
class SetInterviewRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'applied_id' => '=',
        // ...
    ];

}
