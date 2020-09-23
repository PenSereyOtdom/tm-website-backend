<?php

namespace App\Containers\ServiceApprovals\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindServiceApprovalsByIdAction extends Action
{
    public function run(Request $request)
    {
        $serviceapprovals = Apiato::call('ServiceApprovals@FindServiceApprovalsByIdTask', [$request->id]);

        return $serviceapprovals;
    }
}
