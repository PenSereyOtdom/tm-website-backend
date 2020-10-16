<?php

namespace App\Containers\JobPost\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateJobPostAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'company_id', 'project_title', 'project_classification',
            'project_opening_category', 'project_type', 'location', 'salary',
            'qualification','experience_level', 'language','project_priority', 'number_of_hiring',
            'closing_date','email','phone_number','description', 'requirement',
            'condition','status', 'save',
        ]);

        $jobpost = Apiato::call('JobPost@CreateJobPostTask', [$data]);

        return $jobpost;
    }
}
