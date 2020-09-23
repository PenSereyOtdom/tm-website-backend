<?php

/**
 * @apiGroup           Evaluations
 * @apiName            deleteEvaluations
 *
 * @api                {DELETE} /v1/evaluations/:id Endpoint title here..
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
$router->delete('evaluations/{id}', [
    'as' => 'api_evaluations_delete_evaluations',
    'uses'  => 'Controller@deleteEvaluations',
    'middleware' => [
      'auth:api',
    ],
]);
