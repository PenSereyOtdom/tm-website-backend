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
<<<<<<< HEAD
            'user_id','first_name','last_name','email','major','gender','contact','address','status','profile_img','facebook','twitter','github','linkedin','website'
=======
<<<<<<< HEAD
            'user_id','full_name','email','major','gender','contact','address','facebook_link','twitter_link','guthub_link','linkedin_link','website_link'
=======
            // add your request data here
            'user_id','full_name','email','major','gender','contact','address'

>>>>>>> 7e198e81bd785076eb779d7c3de9587e9b7aeb8a
>>>>>>> 5e8d7394f9f21312359bb45dc68034c35ae7e646
        ]);

        $userprofile = Apiato::call('UserProfile@UpdateUserProfileTask', [$request->id, $data]);

        return $userprofile;
    }
}
