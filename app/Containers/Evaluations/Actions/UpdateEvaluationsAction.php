<?php

namespace App\Containers\Evaluations\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateEvaluationsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $evaluations = Apiato::call('Evaluations@UpdateEvaluationsTask', [$request->id, $data]);

        return $evaluations;
    }
}
