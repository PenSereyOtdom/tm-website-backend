<?php

namespace App\Containers\UserProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteUserProfileAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('UserProfile@DeleteUserProfileTask', [$request->id]);
    }
}
