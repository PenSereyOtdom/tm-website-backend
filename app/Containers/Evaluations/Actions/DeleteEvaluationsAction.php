<?php

namespace App\Containers\Evaluations\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteEvaluationsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Evaluations@DeleteEvaluationsTask', [$request->id]);
    }
}
