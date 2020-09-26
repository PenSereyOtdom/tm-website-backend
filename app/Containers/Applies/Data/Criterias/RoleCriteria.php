<?php

namespace App\Containers\Applies\Data\Criterias;

use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class RoleCriteria.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class RoleCriteria extends Criteria
{

    /**
     * @var string
     */
    private $user_id;

    /**
     * RoleCriteria constructor.
     *
     * @param $roles
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->whereHas('users', function ($q) {
            $q->where('id', 1);
        });
    }
}
