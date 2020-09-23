<?php

namespace App\Containers\JobTypes\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteJobTypesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('JobTypes@DeleteJobTypesTask', [$request->id]);
    }
}
