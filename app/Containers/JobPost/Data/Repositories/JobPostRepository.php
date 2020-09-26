<?php

namespace App\Containers\JobPost\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class JobPostRepository
 */
class JobPostRepository extends Repository
{
    protected $container = 'Authorization';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id' => '=',
        'project_title' => 'like',
        'project_classification' => 'like',
        'location' => 'like',
        'project_opening_category' => 'like',
        'project_type' => 'like',
        'salary' => '='
        // ...
    ];

}
