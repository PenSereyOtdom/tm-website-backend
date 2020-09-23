<?php

namespace App\Containers\SaveJob\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSaveJobAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $savejob = Apiato::call('SaveJob@CreateSaveJobTask', [$data]);

        return $savejob;
    }
}
