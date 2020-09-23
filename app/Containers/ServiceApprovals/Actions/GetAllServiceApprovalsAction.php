<?php

namespace App\Containers\ServiceApprovals\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllServiceApprovalsAction extends Action
{
    public function run(Request $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@GetAllServiceApprovalsTask', [], ['addRequestCriteria']);

        return $serviceapprovals;
    }
}
