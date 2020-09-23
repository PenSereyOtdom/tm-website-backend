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
<<<<<<< HEAD
            'user_id','full_name','email','major','gender','contact','address','facebook_link','twitter_link','guthub_link','linkedin_link','website_link'
=======
            'user_id','full_name','email','major','gender','contact','address'

>>>>>>> 7e198e81bd785076eb779d7c3de9587e9b7aeb8a
        ]);

        $userprofile = Apiato::call('UserProfile@CreateUserProfileTask', [$data]);

        return $userprofile;
    }
}
