<?php

namespace App\Containers\JobClassifications\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteJobClassificationsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('JobClassifications@DeleteJobClassificationsTask', [$request->id]);
    }
}
