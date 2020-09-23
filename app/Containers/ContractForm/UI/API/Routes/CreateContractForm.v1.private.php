<?php

/**
 * @apiGroup           ContractForm
 * @apiName            createContractForm
 *
 * @api                {POST} /v1/contractforms Endpoint title here..
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
$router->post('contractforms', [
    'as' => 'api_contractform_create_contract_form',
    'uses'  => 'Controller@createContractForm',
    'middleware' => [
      'auth:api',
    ],
]);
