<?php

namespace App\Containers\Applies\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateAppliesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id', 'confirmed'
        ]);

        $applies = Apiato::call('Applies@UpdateAppliesTask', [$request->id, $data]);

        return $applies;
    }
}
