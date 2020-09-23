<?php

namespace App\Containers\CompanyProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCompanyProfilesAction extends Action
{
    public function run(Request $request)
    {
        $companyprofiles = Apiato::call('CompanyProfile@GetAllCompanyProfilesTask', [], ['addRequestCriteria']);

        return $companyprofiles;
    }
}
