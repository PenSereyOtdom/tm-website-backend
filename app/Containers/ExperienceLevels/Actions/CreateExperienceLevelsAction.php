<?php

namespace App\Containers\ExperienceLevels\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateExperienceLevelsAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','experience_level'
        ]);

        $experiencelevels = Apiato::call('ExperienceLevels@CreateExperienceLevelsTask', [$data]);

        return $experiencelevels;
    }
}
