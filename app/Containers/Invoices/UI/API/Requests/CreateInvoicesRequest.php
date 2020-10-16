<?php

namespace App\Containers\Invoices\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateInvoicesRequest.
 */
class CreateInvoicesRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
    protected $transporter = \App\Containers\Invoices\Data\Transporters\CreateInvoicesTransporter::class;

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
            'invoice_no'=> 'required',
            'total_hours'=> 'required',
            'total_earn'=> 'required',
            'fee'=> 'required',
            'tax'=> 'required',
            'grand_total'=> 'required'
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
