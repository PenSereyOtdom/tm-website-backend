<?php

namespace App\Containers\Education\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteEducationAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Education@DeleteEducationTask', [$request->id]);
    }
}
