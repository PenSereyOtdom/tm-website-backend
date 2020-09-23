<?php

namespace App\Containers\SetInterview\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSetInterviewAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $setinterview = Apiato::call('SetInterview@UpdateSetInterviewTask', [$request->id, $data]);

        return $setinterview;
    }
}
