<?php

namespace App\Containers\CompanyProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCompanyProfileByIdAction extends Action
{
    public function run(Request $request)
    {
        $companyprofile = Apiato::call('CompanyProfile@FindCompanyProfileByIdTask', [$request->id]);

        return $companyprofile;
    }
}
