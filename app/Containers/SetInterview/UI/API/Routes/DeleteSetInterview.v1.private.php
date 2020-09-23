<?php

/**
 * @apiGroup           SetInterview
 * @apiName            deleteSetInterview
 *
 * @api                {DELETE} /v1/setinterviews/:id Endpoint title here..
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
$router->delete('setinterviews/{id}', [
    'as' => 'api_setinterview_delete_set_interview',
    'uses'  => 'Controller@deleteSetInterview',
    'middleware' => [
      'auth:api',
    ],
]);
