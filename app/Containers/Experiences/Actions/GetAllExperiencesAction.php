<?php

namespace App\Containers\Experiences\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllExperiencesAction extends Action
{
    public function run(Request $request)
    {
        $experiences = Apiato::call('Experiences@GetAllExperiencesTask', [], ['addRequestCriteria']);

        return $experiences;
    }
}
