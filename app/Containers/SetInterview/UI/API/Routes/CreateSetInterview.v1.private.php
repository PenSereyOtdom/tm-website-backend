<?php

/**
 * @apiGroup           SetInterview
 * @apiName            createSetInterview
 *
 * @api                {POST} /v1/setinterviews Endpoint title here..
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
$router->post('setinterviews', [
    'as' => 'api_setinterview_create_set_interview',
    'uses'  => 'Controller@createSetInterview',
    'middleware' => [
      'auth:api',
    ],
]);
