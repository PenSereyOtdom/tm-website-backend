<?php

namespace App\Containers\ExperienceLevels\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteExperienceLevelsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('ExperienceLevels@DeleteExperienceLevelsTask', [$request->id]);
    }
}
