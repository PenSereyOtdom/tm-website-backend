<?php

namespace App\Containers\Evaluations\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllEvaluationsAction extends Action
{
    public function run(Request $request)
    {
        $evaluations = Apiato::call('Evaluations@GetAllEvaluationsTask', [], ['addRequestCriteria']);

        return $evaluations;
    }
}
