<?php

namespace App\Containers\ContractForm\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateContractFormAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $contractform = Apiato::call('ContractForm@CreateContractFormTask', [$data]);

        return $contractform;
    }
}
