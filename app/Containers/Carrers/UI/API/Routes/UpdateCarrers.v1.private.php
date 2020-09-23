<?php

/**
 * @apiGroup           Carrers
 * @apiName            updateCarrers
 *
 * @api                {PATCH} /v1/carrers/:id Endpoint title here..
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
$router->patch('carrers/{id}', [
    'as' => 'api_carrers_update_carrers',
    'uses'  => 'Controller@updateCarrers',
    'middleware' => [
      'auth:api',
    ],
]);
