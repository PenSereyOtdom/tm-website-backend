<?php

/**
 * @apiGroup           Services
 * @apiName            findServicesById
 *
 * @api                {GET} /v1/services/:id Endpoint title here..
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
$router->get('services/{id}', [
    'as' => 'api_services_find_services_by_id',
    'uses'  => 'Controller@findServicesById',
    'middleware' => [
      'auth:api',
    ],
]);
