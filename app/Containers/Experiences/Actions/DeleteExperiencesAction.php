<?php

namespace App\Containers\Experiences\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteExperiencesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Experiences@DeleteExperiencesTask', [$request->id]);
    }
}
