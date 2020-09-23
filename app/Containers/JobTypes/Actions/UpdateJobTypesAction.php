<?php

namespace App\Containers\JobTypes\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateJobTypesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','job_type'
        ]);

        $jobtypes = Apiato::call('JobTypes@UpdateJobTypesTask', [$request->id, $data]);

        return $jobtypes;
    }
}
