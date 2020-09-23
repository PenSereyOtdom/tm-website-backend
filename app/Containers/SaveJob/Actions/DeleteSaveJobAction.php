<?php

namespace App\Containers\SaveJob\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSaveJobAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('SaveJob@DeleteSaveJobTask', [$request->id]);
    }
}
