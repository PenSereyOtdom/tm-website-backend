<?php

/**
 * @apiGroup           SetInterview
 * @apiName            findSetInterviewById
 *
 * @api                {GET} /v1/setinterviews/:id Endpoint title here..
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
$router->get('setinterviews/{id}', [
    'as' => 'api_setinterview_find_set_interview_by_id',
    'uses'  => 'Controller@findSetInterviewById',
    'middleware' => [
      'auth:api',
    ],
]);
