<?php

namespace App\Containers\CompanyProfile\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CompanyProfileRepository
 */
class CompanyProfileRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
         'id' => '=',
        'company_id' => '=',
        // 'fullname'  => 'like',
        // 'fullname' => '=',
    ];

}
