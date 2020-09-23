<?php

/**
 * @apiGroup           ContractForm
 * @apiName            updateContractForm
 *
 * @api                {PATCH} /v1/contractforms/:id Endpoint title here..
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
$router->patch('contractforms/{id}', [
    'as' => 'api_contractform_update_contract_form',
    'uses'  => 'Controller@updateContractForm',
    'middleware' => [
      'auth:api',
    ],
]);
