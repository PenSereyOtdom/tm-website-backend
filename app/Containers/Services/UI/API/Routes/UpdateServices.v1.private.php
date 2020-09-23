<?php

/**
 * @apiGroup           Services
 * @apiName            updateServices
 *
 * @api                {PATCH} /v1/services/:id Endpoint title here..
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
$router->patch('services/{id}', [
    'as' => 'api_services_update_services',
    'uses'  => 'Controller@updateServices',
    'middleware' => [
      'auth:api',
    ],
]);
