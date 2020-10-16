<?php

namespace App\Containers\Evaluations\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateEvaluationsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','politeness','speed','knowledge','comment'
        ]);

        $evaluations = Apiato::call('Evaluations@CreateEvaluationsTask', [$data]);

        return $evaluations;
    }
}
