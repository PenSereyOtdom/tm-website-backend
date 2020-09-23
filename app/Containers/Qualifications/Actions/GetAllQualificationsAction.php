<?php

namespace App\Containers\Qualifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllQualificationsAction extends Action
{
    public function run(Request $request)
    {
        $qualifications = Apiato::call('Qualifications@GetAllQualificationsTask', [], ['addRequestCriteria']);

        return $qualifications;
    }
}
