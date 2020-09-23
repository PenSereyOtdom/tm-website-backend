<?php

/**
 * @apiGroup           SetInterview
 * @apiName            updateSetInterview
 *
 * @api                {PATCH} /v1/setinterviews/:id Endpoint title here..
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
$router->patch('setinterviews/{id}', [
    'as' => 'api_setinterview_update_set_interview',
    'uses'  => 'Controller@updateSetInterview',
    'middleware' => [
      'auth:api',
    ],
]);
