<?php

namespace App\Containers\UserProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllUserProfilesAction extends Action
{
    public function run(Request $request)
    {
        $userprofiles = Apiato::call('UserProfile@GetAllUserProfilesTask', [], ['addRequestCriteria']);

        return $userprofiles;
    }
}
