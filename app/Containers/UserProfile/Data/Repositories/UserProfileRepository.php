<?php

namespace App\Containers\UserProfile\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class UserProfileRepository
 */
class UserProfileRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'user_id' => '=',
        // ...
    ];

}
