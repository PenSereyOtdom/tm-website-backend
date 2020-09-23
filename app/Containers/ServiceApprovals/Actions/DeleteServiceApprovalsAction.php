<?php

namespace App\Containers\ServiceApprovals\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteServiceApprovalsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('ServiceApprovals@DeleteServiceApprovalsTask', [$request->id]);
    }
}
