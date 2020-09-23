<?php

namespace App\Containers\Master\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteMasterAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Master@DeleteMasterTask', [$request->id]);
    }
}
