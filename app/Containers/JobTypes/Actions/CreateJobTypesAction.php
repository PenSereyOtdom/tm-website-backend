<?php

namespace App\Containers\JobTypes\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateJobTypesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id', 'job_type'

        ]);

        $jobtypes = Apiato::call('JobTypes@CreateJobTypesTask', [$data]);

        return $jobtypes;
    }
}
