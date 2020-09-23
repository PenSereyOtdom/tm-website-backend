<?php

namespace App\Containers\Education\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllEducationAction extends Action
{
    public function run(Request $request)
    {
        $education = Apiato::call('Education@GetAllEducationTask', [], ['addRequestCriteria']);

        return $education;
    }
}
