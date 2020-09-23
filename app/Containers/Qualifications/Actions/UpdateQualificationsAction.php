<?php

namespace App\Containers\Qualifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateQualificationsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'user_id','qualification'

        ]);

        $qualifications = Apiato::call('Qualifications@UpdateQualificationsTask', [$request->id, $data]);

        return $qualifications;
    }
}
