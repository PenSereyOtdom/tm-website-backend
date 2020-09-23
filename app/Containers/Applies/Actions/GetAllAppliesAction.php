<?php

namespace App\Containers\Applies\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAppliesAction extends Action
{
    public function run(Request $request)
    {
        $applies = Apiato::call('Applies@GetAllAppliesTask', [], ['addRequestCriteria']);

        return $applies;
    }
}
