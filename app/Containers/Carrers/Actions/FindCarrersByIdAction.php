<?php

namespace App\Containers\Carrers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCarrersByIdAction extends Action
{
    public function run(Request $request)
    {
        $carrers = Apiato::call('Carrers@FindCarrersByIdTask', [$request->id]);

        return $carrers;
    }
}
