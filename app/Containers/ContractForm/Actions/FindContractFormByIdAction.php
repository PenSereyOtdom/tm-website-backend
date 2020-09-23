<?php

namespace App\Containers\ContractForm\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindContractFormByIdAction extends Action
{
    public function run(Request $request)
    {
        $contractform = Apiato::call('ContractForm@FindContractFormByIdTask', [$request->id]);

        return $contractform;
    }
}
