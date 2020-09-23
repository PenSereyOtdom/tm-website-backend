<?php

namespace App\Containers\Experiences\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindExperiencesByIdAction extends Action
{
    public function run(Request $request)
    {
        $experiences = Apiato::call('Experiences@FindExperiencesByIdTask', [$request->id]);

        return $experiences;
    }
}
