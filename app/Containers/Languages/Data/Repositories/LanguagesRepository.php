<?php

namespace App\Containers\Languages\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LanguagesRepository
 */
class LanguagesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
