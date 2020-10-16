<?php

namespace App\Containers\UserProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateUserProfileAction extends Action
{
    public function run(Request $request)
    {

        $data = $request->sanitizeInput([
            'user_id','full_name','status','email','major','gender','contact','address','dob'
        ]);

        $userprofile = Apiato::call('UserProfile@CreateUserProfileTask', [$data]);

        return $userprofile;
    }
}
