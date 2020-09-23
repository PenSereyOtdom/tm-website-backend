<?php

namespace App\Containers\UserProfile\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateUserProfileRequest.
 */
class CreateUserProfileRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\UserProfile\Data\Transporters\CreateUserProfileTransporter::class;

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
//            'first_name'=> 'required',
//            'last_name' => 'required',
//            'email'=> 'required',
//            'major'=> 'required',
//            'gender'=> 'required',
//            'contact'=> 'required',
//            'address'=> 'required',
//            'status'=> 'required',
//            'profile_img',
//            'facebook',
//            'twitter',
//            'github',
//            'linkedin',
//            'website'
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
