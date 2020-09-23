<?php

namespace App\Containers\Master\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateMasterAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','title'
        ]);

        $master = Apiato::call('Master@UpdateMasterTask', [$request->id, $data]);

        return $master;
    }
}
