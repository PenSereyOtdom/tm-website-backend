<?php

namespace App\Containers\JobPost\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteJobPostAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('JobPost@DeleteJobPostTask', [$request->id]);
    }
}
