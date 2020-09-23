<?php

namespace App\Containers\JobTypes\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllJobTypesAction extends Action
{
    public function run(Request $request)
    {
        $jobtypes = Apiato::call('JobTypes@GetAllJobTypesTask', [], ['addRequestCriteria']);

        return $jobtypes;
    }
}
