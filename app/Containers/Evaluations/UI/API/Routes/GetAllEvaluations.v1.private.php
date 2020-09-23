<?php

/**
 * @apiGroup           Evaluations
 * @apiName            getAllEvaluations
 *
 * @api                {GET} /v1/evaluations Endpoint title here..
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
$router->get('evaluations', [
    'as' => 'api_evaluations_get_all_evaluations',
    'uses'  => 'Controller@getAllEvaluations',
    'middleware' => [
      'auth:api',
    ],
]);
