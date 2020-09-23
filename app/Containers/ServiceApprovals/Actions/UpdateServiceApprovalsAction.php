<?php

namespace App\Containers\ServiceApprovals\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateServiceApprovalsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $serviceapprovals = Apiato::call('ServiceApprovals@UpdateServiceApprovalsTask', [$request->id, $data]);

        return $serviceapprovals;
    }
}
