<?php

namespace App\Containers\SaveJob\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSaveJobByIdAction extends Action
{
    public function run(Request $request)
    {
        $savejob = Apiato::call('SaveJob@FindSaveJobByIdTask', [$request->id]);

        return $savejob;
    }
}
