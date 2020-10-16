<?php

namespace App\Containers\CV\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCVAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'full_name','email', 'phone_number', 'summary','gender','dob','skill'
        ]);

        $cv = Apiato::call('CV@UpdateCVTask', [$request->id, $data]);

        return $cv;
    }
}
