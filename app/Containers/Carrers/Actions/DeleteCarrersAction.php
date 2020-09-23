<?php

namespace App\Containers\Carrers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCarrersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Carrers@DeleteCarrersTask', [$request->id]);
    }
}
