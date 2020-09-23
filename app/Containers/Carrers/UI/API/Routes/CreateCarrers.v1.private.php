<?php

/**
 * @apiGroup           Carrers
 * @apiName            createCarrers
 *
 * @api                {POST} /v1/carrers Endpoint title here..
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
$router->post('carrers', [
    'as' => 'api_carrers_create_carrers',
    'uses'  => 'Controller@createCarrers',
    'middleware' => [
      'auth:api',
    ],
]);
