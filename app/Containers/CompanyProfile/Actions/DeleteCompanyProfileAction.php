<?php

namespace App\Containers\CompanyProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCompanyProfileAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('CompanyProfile@DeleteCompanyProfileTask', [$request->id]);
    }
}
