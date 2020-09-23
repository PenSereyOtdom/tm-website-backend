<?php

namespace App\Containers\SaveJob\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSaveJobAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $savejob = Apiato::call('SaveJob@UpdateSaveJobTask', [$request->id, $data]);

        return $savejob;
    }
}
