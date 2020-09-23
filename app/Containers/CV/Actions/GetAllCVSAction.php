<?php

namespace App\Containers\CV\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCVSAction extends Action
{
    public function run(Request $request)
    {
        $cvs = Apiato::call('CV@GetAllCVSTask', [], ['addRequestCriteria']);

        return $cvs;
    }
}
