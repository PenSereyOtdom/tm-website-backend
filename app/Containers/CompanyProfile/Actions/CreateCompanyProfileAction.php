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
            'company_id','full_name','email','img_profile','overview','company_name','address','representative',
            'person_in_charge','contact','year_of_establishment','annual_sales','number_of_employees','overview_history',
            'main_supplier','main_client','business_detail','area_of_expertise','construction_work_to_increase_the_outsourcing_ratio_content','construction_work_to_reduce_cost_content','target_layer','url_name','other'
        ]);

        $companyprofile = Apiato::call('CompanyProfile@CreateCompanyProfileTask', [$data]);

        return $companyprofile;
    }
}
