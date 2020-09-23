<?php

namespace App\Containers\Services\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteServicesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Services@DeleteServicesTask', [$request->id]);
    }
}
