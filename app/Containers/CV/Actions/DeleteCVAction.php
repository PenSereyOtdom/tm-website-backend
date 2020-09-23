<?php

namespace App\Containers\CV\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCVAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('CV@DeleteCVTask', [$request->id]);
    }
}
