<?php

namespace App\Containers\Services\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateServicesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $services = Apiato::call('Services@UpdateServicesTask', [$request->id, $data]);

        return $services;
    }
}
