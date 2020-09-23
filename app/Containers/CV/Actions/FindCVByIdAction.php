<?php

namespace App\Containers\CV\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCVByIdAction extends Action
{
    public function run(Request $request)
    {
        $cv = Apiato::call('CV@FindCVByIdTask', [$request->id]);

        return $cv;
    }
}
