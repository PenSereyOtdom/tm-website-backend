<?php

namespace App\Containers\Master\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindMasterByIdAction extends Action
{
    public function run(Request $request)
    {
        $master = Apiato::call('Master@FindMasterByIdTask', [$request->id]);

        return $master;
    }
}
