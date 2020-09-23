<?php

namespace App\Containers\ExperienceLevels\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllExperienceLevelsAction extends Action
{
    public function run(Request $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@GetAllExperienceLevelsTask', [], ['addRequestCriteria']);

        return $experiencelevels;
    }
}
