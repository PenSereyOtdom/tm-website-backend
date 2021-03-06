<?php

namespace App\Containers\CV\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCVAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'seeker_id', 'full_name','email', 'phone_number', 'summary','gender','dob','skill'
        ]);

        $cv = Apiato::call('CV@CreateCVTask', [$data]);

        return $cv;
    }
}
