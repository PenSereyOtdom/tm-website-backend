<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Applies\Models\Applies;
use App\Containers\Applies\UI\API\Transformers\AppliesTransformer;
use App\Containers\UserProfile\UI\API\Transformers\UserProfileTransformer;
use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class UserPrivateProfileTransformer.
 *
 * @author Johannes Schobel <johannes.schobel@googlemail.com>
 */
class UserPrivateProfileTransformer extends Transformer
{

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'roles',
    ];

    /**
     * @var  array
     */
    protected $defaultIncludes = [
    ];

    /**
     * @param \App\Containers\User\Models\User $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        $response = [
            'object'               => 'User',
            'id'                   => $user->id,
            'username'             => $user->username,
            'email'                => $user->email,
            'phone'                => $user->phone,
            'confirmed'            => $user->confirmed,
            'nickname'             => $user->nickname,
            'gender'               => $user->gender,
            'birth'                => $user->birth,

            'social_auth_provider' => $user->social_provider,
            'social_id'            => $user->social_id,
            'social_avatar'        => [
                'avatar'   => $user->social_avatar,
                'original' => $user->social_avatar_original,
            ],
            'roles' => $user->roles,
            'created_at'           => $user->created_at,
            'updated_at'           => $user->updated_at,
            'readable_created_at'  => $user->created_at->diffForHumans(),
            'readable_updated_at'  => $user->updated_at->diffForHumans(),
        ];

        $response = $this->ifAdmin([
            'real_id'    => $user->id,
            'deleted_at' => $user->deleted_at,
        ], $response);

        return $response;
    }

    public function includeRoles(User $user)
    {
        return $this->collection($user->roles, new RoleTransformer());
    }
}
