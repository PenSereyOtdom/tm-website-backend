<?php

namespace App\Containers\Experiences\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateExperiencesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'seeker_id', 'exp_workplace_name','exp_title','exp_start_date','exp_end_date','exp_detail'
        ]);

        $experiences = Apiato::call('Experiences@UpdateExperiencesTask', [$request->id, $data]);

        return $experiences;
    }
}
