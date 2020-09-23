<?php

namespace App\Containers\ContractForm\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteContractFormAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('ContractForm@DeleteContractFormTask', [$request->id]);
    }
}
