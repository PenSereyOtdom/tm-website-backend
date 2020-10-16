<?php

namespace App\Containers\Invoices\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class InvoicesRepository
 */
class InvoicesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
