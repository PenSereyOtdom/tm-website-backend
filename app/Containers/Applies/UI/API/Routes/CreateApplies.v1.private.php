<?php

/**
 * @apiGroup           Applies
 * @apiName            createApplies
 *
 * @api                {POST} /v1/applies Endpoint title here..
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
$router->post('applies', [
    'as' => 'api_applies_create_applies',
    'uses'  => 'Controller@createApplies',
    'middleware' => [
      'auth:api',
    ],
]);
