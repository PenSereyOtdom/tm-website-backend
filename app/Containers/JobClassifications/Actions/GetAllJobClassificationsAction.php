<?php

namespace App\Containers\JobClassifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllJobClassificationsAction extends Action
{
    public function run(Request $request)
    {
        $jobclassifications = Apiato::call('JobClassifications@GetAllJobClassificationsTask', [], ['addRequestCriteria']);

        return $jobclassifications;
    }
}
