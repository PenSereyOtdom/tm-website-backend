<?php

namespace App\Containers\CompanyProfile\Models;

use App\Ship\Parents\Models\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'company_id','full_name','email','img_profile','overview','company_name','address','representative',
        'person_in_charge','contact','year_of_establishment','annul_sales','number_of_employees','overview_history',
        'main_supplier','main_client','business_detail','area_of_expertise','construction','target_layer','url_name','other'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'companyprofiles';
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'companyprofiles';
}
