<?php

namespace App\Containers\Qualifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindQualificationsByIdAction extends Action
{
    public function run(Request $request)
    {
        $qualifications = Apiato::call('Qualifications@FindQualificationsByIdTask', [$request->id]);

        return $qualifications;
    }
}
