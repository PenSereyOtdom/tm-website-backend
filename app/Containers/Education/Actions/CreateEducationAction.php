<?php

namespace App\Containers\Education\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateEducationAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','school_name', 'major', 'degree', 'exp_total','edu_start_date', 'edu_end_date','edu_detail'
        ]);

        $education = Apiato::call('Education@CreateEducationTask', [$data]);

        return $education;
    }
}
