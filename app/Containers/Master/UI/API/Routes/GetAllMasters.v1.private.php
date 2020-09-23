<?php

/**
 * @apiGroup           Master
 * @apiName            getAllMasters
 *
 * @api                {GET} /v1/masters Endpoint title here..
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
$router->get('masters', [
    'as' => 'api_master_get_all_masters',
    'uses'  => 'Controller@getAllMasters',
    'middleware' => [
      'auth:api',
    ],
]);
