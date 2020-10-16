<?php

namespace App\Containers\JobPost\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateJobPostRequest.
 */
class CreateJobPostRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\JobPost\Data\Transporters\CreateJobPostTransporter::class;

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
            'company_id' => 'required',
            'project_title' => 'required',
            'project_classification'=>'required',
            'project_opening_category'=>'required',
            'project_type'=>'required',
            'location'=>'required',
            'salary'=>'required',
            'qualification'=>'required',
            'experience_level'=>'required',
            'language'=>'required',
            'project_priority'=>'required',
            'number_of_hiring'=>'required',
            'closing_date'=>'required',
            'email'=>'required|email|max:40',
            'phone'=>'required',
            'description'=>'required',
            'requirement'=>'required',
            'condition'=>'required',
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
