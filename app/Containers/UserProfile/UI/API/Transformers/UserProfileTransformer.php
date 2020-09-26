<?php

namespace App\Containers\UserProfile\UI\API\Transformers;

use App\Containers\UserProfile\Models\UserProfile;
use App\Ship\Parents\Transformers\Transformer;

class UserProfileTransformer extends Transformer
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
     * @param UserProfile $entity
     *
     * @return array
     */
    public function transform(UserProfile $entity)
    {
        $response = [
            'object' => 'UserProfile',
            'id' => $entity->getHashedKey(),
            'full_name'=> $entity->full_name,
            'email'=> $entity->email,
            'major'=> $entity->major,
            'gender'=> $entity->gender,
            'contact'=> $entity->contact,
            'address'=> $entity->address,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
