<?php

/**
 * @apiGroup           Master
 * @apiName            updateMaster
 *
 * @api                {PATCH} /v1/masters/:id Endpoint title here..
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
$router->patch('masters/{id}', [
    'as' => 'api_master_update_master',
    'uses'  => 'Controller@updateMaster',
    'middleware' => [
      'auth:api',
    ],
]);
