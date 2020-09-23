<?php

/**
 * @apiGroup           Applies
 * @apiName            deleteApplies
 *
 * @api                {DELETE} /v1/applies/:id Endpoint title here..
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
$router->delete('applies/{id}', [
    'as' => 'api_applies_delete_applies',
    'uses'  => 'Controller@deleteApplies',
    'middleware' => [
      'auth:api',
    ],
]);
