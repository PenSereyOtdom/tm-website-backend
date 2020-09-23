<?php

/**
 * @apiGroup           Services
 * @apiName            createServices
 *
 * @api                {POST} /v1/services Endpoint title here..
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
$router->post('services', [
    'as' => 'api_services_create_services',
    'uses'  => 'Controller@createServices',
    'middleware' => [
      'auth:api',
    ],
]);
