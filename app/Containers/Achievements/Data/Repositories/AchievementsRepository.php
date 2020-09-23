<?php

namespace App\Containers\Achievements\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AchievementsRepository
 */
class AchievementsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
