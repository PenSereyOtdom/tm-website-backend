<?php

namespace App\Containers\Experiences\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateExperiencesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id', 'exp_workplace_name','exp_title','exp_start_date','exp_end_date','exp_detail'
        ]);

        $experiences = Apiato::call('Experiences@CreateExperiencesTask', [$data]);

        return $experiences;
    }
}
