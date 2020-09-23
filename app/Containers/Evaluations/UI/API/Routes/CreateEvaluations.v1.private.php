<?php

/**
 * @apiGroup           Evaluations
 * @apiName            createEvaluations
 *
 * @api                {POST} /v1/evaluations Endpoint title here..
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
$router->post('evaluations', [
    'as' => 'api_evaluations_create_evaluations',
    'uses'  => 'Controller@createEvaluations',
    'middleware' => [
      'auth:api',
    ],
]);
