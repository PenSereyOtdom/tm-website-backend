<?php

namespace App\Containers\Services\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllServicesAction extends Action
{
    public function run(Request $request)
    {
        $services = Apiato::call('Services@GetAllServicesTask', [], ['addRequestCriteria']);

        return $services;
    }
}
