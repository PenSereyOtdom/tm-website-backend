<?php

/**
 * @apiGroup           JobTypes
 * @apiName            updateJobTypes
 *
 * @api                {PATCH} /v1/jobtypes/:id Endpoint title here..
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
  "data": {
    "job_type":"Engineering"
  }
}
 */

/** @var Route $router */
$router->patch('jobtypes/{id}', [
    'as' => 'api_jobtypes_update_project_types',
    'uses'  => 'Controller@updateJobTypes',
    'middleware' => [
      'auth:api',
    ],
]);
