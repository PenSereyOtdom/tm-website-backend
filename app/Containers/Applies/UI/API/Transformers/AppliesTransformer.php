<?php

namespace App\Containers\Applies\UI\API\Transformers;

use App\Containers\Applies\Models\Applies;
use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\User\Models\User;

class AppliesTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Applies $entity
     *
     * @return array
     */
    public function transform(Applies $entity)
    {
        $response = [
            'object' => 'Applies',
            'id' => $entity->getHashedKey(),
            'confirmed'=> $entity->confirmed,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
    public function includeRoles(User $user)
    {
        return $this->collection($user);
    }
}
