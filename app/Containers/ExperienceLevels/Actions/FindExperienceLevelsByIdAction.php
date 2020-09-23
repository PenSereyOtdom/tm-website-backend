<?php

namespace App\Containers\ExperienceLevels\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindExperienceLevelsByIdAction extends Action
{
    public function run(Request $request)
    {
        $experiencelevels = Apiato::call('ExperienceLevels@FindExperienceLevelsByIdTask', [$request->id]);

        return $experiencelevels;
    }
}
