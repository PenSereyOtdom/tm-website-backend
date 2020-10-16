<?php

/**
 * @apiGroup           Applies
 * @apiName            updateApplies
 *
 * @api                {PATCH} /v1/applies/:id Endpoint title here..
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
$router->put('applies/{id}', [
    'as' => 'api_applies_update_applies',
    'uses'  => 'Controller@updateApplies',
    'middleware' => [
      'auth:api',
    ],
]);
