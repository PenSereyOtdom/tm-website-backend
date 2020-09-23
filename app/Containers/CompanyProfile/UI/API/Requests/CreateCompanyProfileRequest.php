<?php

namespace App\Containers\CompanyProfile\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateCompanyProfileRequest.
 */
class CreateCompanyProfileRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\CompanyProfile\Data\Transporters\CreateCompanyProfileTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => '',
        'roles'       => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            // 'id' => 'required',
            'full_name'  => 'required',
            'email' => 'required',
//            'img_profile' => 'required',
//            'overview' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'representative' => 'required',
            'person_in_charge' => 'required',
            'contact' => 'required',
            'year_of_establishment' => 'required',
            'annul_sales' => 'required',
            'number_of_employees' => 'required',
            'overview_history' => 'required',
            'main_supplier' => 'required',
            'main_client' => 'required',
            'business_detail' => 'required',
            'area_of_expertise' => 'required',
            'construction' => 'required',
            'target_layer' => 'required',
//            'url_name' => 'required',
//            'other',
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
