<?php

namespace App\Containers\UserProfile\UI\API\Transformers;

use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Containers\UserProfile\Models\UserProfile;
use App\Containers\User\Models\User;
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
        'users',
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

//    public function includeTags(UserProfile $entity)
//    {
//        return $this->collection($entity->tags, new UserTransformer);
//    }
    public function includeUsers(UserProfile $entity)
    {
        $users = $entity->users;
        return $this->collection($users, new UserTransformer);
    }
}
