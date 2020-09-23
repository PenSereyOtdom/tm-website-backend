<?php

namespace App\Containers\Carrers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCarrersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','title', 'content','path'
        ]);

        $carrers = Apiato::call('Carrers@CreateCarrersTask', [$data]);

        return $carrers;
    }
}
