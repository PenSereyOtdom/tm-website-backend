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
        'applied_id', 'overview','management_of_person_info','purpose_of_use','prohibition','personal_info',
        'inquiry', 'compliance','contact_us','status_agree',
        ]);

        $contractform = Apiato::call('ContractForm@CreateContractFormTask', [$data]);

        return $contractform;
    }
}
