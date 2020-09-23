<?php

namespace App\Containers\UserProfile\UI\API\Controllers;

use App\Containers\UserProfile\UI\API\Requests\CreateUserProfileRequest;
use App\Containers\UserProfile\UI\API\Requests\DeleteUserProfileRequest;
use App\Containers\UserProfile\UI\API\Requests\GetAllUserProfilesRequest;
use App\Containers\UserProfile\UI\API\Requests\FindUserProfileByIdRequest;
use App\Containers\UserProfile\UI\API\Requests\UpdateUserProfileRequest;
use App\Containers\UserProfile\UI\API\Transformers\UserProfileTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\UserProfile\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateUserProfileRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createUserProfile(CreateUserProfileRequest $request)
    {
        $userprofile = Apiato::call('UserProfile@CreateUserProfileAction', [$request]);

        return $this->created($this->transform($userprofile, UserProfileTransformer::class));
    }

    /**
     * @param FindUserProfileByIdRequest $request
     * @return array
     */
    public function findUserProfileById(FindUserProfileByIdRequest $request)
    {
        $userprofile = Apiato::call('UserProfile@FindUserProfileByIdAction', [$request]);

        return $this->transform($userprofile, UserProfileTransformer::class);
    }

    /**
     * @param GetAllUserProfilesRequest $request
     * @return array
     */
    public function getAllUserProfiles(GetAllUserProfilesRequest $request)
    {
        $userprofiles = Apiato::call('UserProfile@GetAllUserProfilesAction', [$request]);

        return $this->transform($userprofiles, UserProfileTransformer::class);
    }

    /**
     * @param UpdateUserProfileRequest $request
     * @return array
     */
    public function updateUserProfile(UpdateUserProfileRequest $request)
    {
        $userprofile = Apiato::call('UserProfile@UpdateUserProfileAction', [$request]);

        return $this->transform($userprofile, UserProfileTransformer::class);
    }

    /**
     * @param DeleteUserProfileRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUserProfile(DeleteUserProfileRequest $request)
    {
        Apiato::call('UserProfile@DeleteUserProfileAction', [$request]);

        return $this->noContent();
    }
}
