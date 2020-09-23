<?php

namespace App\Containers\JobClassifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateJobClassificationsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','project_classification'
        ]);

        $jobclassifications = Apiato::call('JobClassifications@CreateJobClassificationsTask', [$data]);

        return $jobclassifications;
    }
}
