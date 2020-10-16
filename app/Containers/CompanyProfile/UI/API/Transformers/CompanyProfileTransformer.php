<?php

namespace App\Containers\CompanyProfile\UI\API\Transformers;

use App\Containers\CompanyProfile\Models\CompanyProfile;
use App\Ship\Parents\Transformers\Transformer;

class CompanyProfileTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param CompanyProfile $entity
     *
     * @return array
     */
    public function transform(CompanyProfile $entity)
    {
        $response = [
            'object' => 'CompanyProfile',
            'company_id'=> $entity->company_id,
            'id' => $entity->id,
            'company_id' => $entity->company_id,
            'full_name'=> $entity->full_name,
            'email'=> $entity->email,
            'img_profile'=> $entity->img_profile,
            'overview'=> $entity->overview,
            'company_name'=> $entity->company_name,
            'address'=> $entity->address,
            'representative'=> $entity->representative,
            'person_in_charge'=> $entity->person_in_charge,
            'contact'=> $entity->contact,
            'year_of_establishment'=> $entity->year_of_establishment,
            'annual_sales'=> $entity->annual_sales,
            'number_of_employees'=> $entity->number_of_employees,
            'overview_history'=> $entity->overview_history,
            'main_supplier'=> $entity->main_supplier,
            'main_client'=> $entity->main_client,
            'business_detail'=> $entity->business_detail,
            'area_of_expertise'=> $entity->area_of_expertise,
            'construction_work_to_increase_the_outsourcing_ratio_content'=> $entity->construction_work_to_increase_the_outsourcing_ratio_content,
            'construction_work_to_reduce_cost_content' => $entity->construction_work_to_reduce_cost_content,
            'target_layer'=> $entity->target_layer,
            'url_name'=> $entity->url_name,
            'other'=> $entity->other,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
