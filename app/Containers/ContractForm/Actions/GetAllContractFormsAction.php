<?php

namespace App\Containers\ContractForm\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllContractFormsAction extends Action
{
    public function run(Request $request)
    {
        $contractforms = Apiato::call('ContractForm@GetAllContractFormsTask', [], ['addRequestCriteria']);

        return $contractforms;
    }
}
