<?php

/**
 * @apiGroup           Carrers
 * @apiName            deleteCarrers
 *
 * @api                {DELETE} /v1/carrers/:id Endpoint title here..
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
$router->delete('carrers/{id}', [
    'as' => 'api_carrers_delete_carrers',
    'uses'  => 'Controller@deleteCarrers',
    'middleware' => [
      'auth:api',
    ],
]);
