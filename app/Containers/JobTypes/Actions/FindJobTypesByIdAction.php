<?php

namespace App\Containers\JobTypes\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindJobTypesByIdAction extends Action
{
    public function run(Request $request)
    {
        $jobtypes = Apiato::call('JobTypes@FindJobTypesByIdTask', [$request->id]);

        return $jobtypes;
    }
}
