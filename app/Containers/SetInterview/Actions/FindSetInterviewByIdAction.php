<?php

namespace App\Containers\SetInterview\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSetInterviewByIdAction extends Action
{
    public function run(Request $request)
    {
        $setinterview = Apiato::call('SetInterview@FindSetInterviewByIdTask', [$request->id]);

        return $setinterview;
    }
}
