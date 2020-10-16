<?php

namespace App\Containers\Education\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateEducationRequest.
 */
class CreateEducationRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\Education\Data\Transporters\CreateEducationTransporter::class;

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
            'seeker_id' => 'required',
            'school_name' => 'required',
            'degree' => 'required',
            'edu_start_date' => 'required',
            'edu_end_date' => 'required',
            'major' => 'required',
            'edu_detail' => 'required',
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
