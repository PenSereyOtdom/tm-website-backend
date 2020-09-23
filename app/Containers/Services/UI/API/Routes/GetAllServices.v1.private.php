<?php

/**
 * @apiGroup           Services
 * @apiName            getAllServices
 *
 * @api                {GET} /v1/services Endpoint title here..
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
$router->get('services', [
    'as' => 'api_services_get_all_services',
    'uses'  => 'Controller@getAllServices',
    'middleware' => [
      'auth:api',
    ],
]);
