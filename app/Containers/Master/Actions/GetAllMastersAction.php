<?php

namespace App\Containers\Master\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllMastersAction extends Action
{
    public function run(Request $request)
    {
        $masters = Apiato::call('Master@GetAllMastersTask', [], ['addRequestCriteria']);

        return $masters;
    }
}
