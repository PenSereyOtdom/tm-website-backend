<?php

namespace App\Containers\Education\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateEducationAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'seeker_id','school_name', 'major', 'degree','edu_start_date', 'edu_end_date','edu_detail'
        ]);

        $education = Apiato::call('Education@UpdateEducationTask', [$request->id, $data]);

        return $education;
    }
}
