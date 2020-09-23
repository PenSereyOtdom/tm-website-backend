<?php

/**
 * @apiGroup           Master
 * @apiName            findMasterById
 *
 * @api                {GET} /v1/masters/:id Endpoint title here..
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
$router->get('masters/{id}', [
    'as' => 'api_master_find_master_by_id',
    'uses'  => 'Controller@findMasterById',
    'middleware' => [
      'auth:api',
    ],
]);
