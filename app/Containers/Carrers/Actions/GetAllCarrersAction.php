<?php

namespace App\Containers\Carrers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCarrersAction extends Action
{
    public function run(Request $request)
    {
        $carrers = Apiato::call('Carrers@GetAllCarrersTask', [], ['addRequestCriteria']);

        return $carrers;
    }
}
