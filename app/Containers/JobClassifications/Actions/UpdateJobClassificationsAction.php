<?php

namespace App\Containers\JobClassifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateJobClassificationsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','project_classification'
        ]);

        $jobclassifications = Apiato::call('JobClassifications@UpdateJobClassificationsTask', [$request->id, $data]);

        return $jobclassifications;
    }
}
