<?php

/**
 * @apiGroup           ContractForm
 * @apiName            getAllContractForms
 *
 * @api                {GET} /v1/contractforms Endpoint title here..
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
$router->get('contractforms', [
    'as' => 'api_contractform_get_all_contract_forms',
    'uses'  => 'Controller@getAllContractForms',
    'middleware' => [
      'auth:api',
    ],
]);
