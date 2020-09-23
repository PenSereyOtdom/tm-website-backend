<?php

namespace App\Containers\UserProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindUserProfileByIdAction extends Action
{
    public function run(Request $request)
    {
        $userprofile = Apiato::call('UserProfile@FindUserProfileByIdTask', [$request->id]);

        return $userprofile;
    }
}
