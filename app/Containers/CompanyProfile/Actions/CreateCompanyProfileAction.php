<?php

namespace App\Containers\CompanyProfile\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCompanyProfileAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'user_id','full_name','email','img_profile','overview','company_name','address','representative',
            'person_in_charge','contact','year_of_establishment','annul_sales','number_of_employees','overview_history',
            'main_supplier','main_client','business_detail','area_of_expertise','construction','target_layer','url_name','other'
        ]);

        $companyprofile = Apiato::call('CompanyProfile@CreateCompanyProfileTask', [$data]);

        return $companyprofile;
    }
}
