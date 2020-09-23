<?php

namespace App\Containers\Services\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindServicesByIdAction extends Action
{
    public function run(Request $request)
    {
        $services = Apiato::call('Services@FindServicesByIdTask', [$request->id]);

        return $services;
    }
}
