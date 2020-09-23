<?php

namespace App\Containers\SetInterview\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSetInterviewAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('SetInterview@DeleteSetInterviewTask', [$request->id]);
    }
}
