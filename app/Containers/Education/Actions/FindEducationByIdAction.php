<?php

namespace App\Containers\Education\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindEducationByIdAction extends Action
{
    public function run(Request $request)
    {
        $education = Apiato::call('Education@FindEducationByIdTask', [$request->id]);

        return $education;
    }
}
