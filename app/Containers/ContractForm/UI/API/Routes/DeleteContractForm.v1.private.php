<?php

/**
 * @apiGroup           ContractForm
 * @apiName            deleteContractForm
 *
 * @api                {DELETE} /v1/contractforms/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('contractforms/{id}', [
    'as' => 'api_contractform_delete_contract_form',
    'uses'  => 'Controller@deleteContractForm',
    'middleware' => [
      'auth:api',
    ],
]);
