<?php

namespace App\Containers\SaveJob\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSaveJobsAction extends Action
{
    public function run(Request $request)
    {
        $savejobs = Apiato::call('SaveJob@GetAllSaveJobsTask', [], ['addRequestCriteria']);

        return $savejobs;
    }
}
