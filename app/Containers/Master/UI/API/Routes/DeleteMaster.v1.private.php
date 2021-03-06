<?php

/**
 * @apiGroup           Master
 * @apiName            deleteMaster
 *
 * @api                {DELETE} /v1/masters/:id Endpoint title here..
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
$router->delete('masters/{id}', [
    'as' => 'api_master_delete_master',
    'uses'  => 'Controller@deleteMaster',
    'middleware' => [
      'auth:api',
    ],
]);
