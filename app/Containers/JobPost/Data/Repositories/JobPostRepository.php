<?php

namespace App\Containers\JobPost\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class JobPostRepository
 */
class JobPostRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => 'like',
        'salary',
        // ...
    ];

}
