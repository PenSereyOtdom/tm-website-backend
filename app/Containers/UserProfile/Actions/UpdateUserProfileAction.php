<?php

namespace App\Containers\UserProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateUserProfileAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'full_name','status','email','major','gender','contact','address','dob'
        ]);

        $userprofile = Apiato::call('UserProfile@UpdateUserProfileTask', [$request->id, $data]);

        return $userprofile;
    }
}
