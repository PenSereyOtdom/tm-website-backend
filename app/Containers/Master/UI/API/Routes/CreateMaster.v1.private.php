<?php

/**
 * @apiGroup           Master
 * @apiName            createMaster
 *
 * @api                {POST} /v1/masters Endpoint title here..
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
$router->post('masters', [
    'as' => 'api_master_create_master',
    'uses'  => 'Controller@createMaster',
    'middleware' => [
      'auth:api',
    ],
]);
