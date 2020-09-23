<?php

/**
 * @apiGroup           JobTypes
 * @apiName            deleteJobTypes
 *
 * @api                {DELETE} /v1/jobtypes/:id Endpoint title here..
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
$router->delete('jobtypes/{id}', [
    'as' => 'api_jobtypes_delete_project_types',
    'uses'  => 'Controller@deleteJobTypes',
    'middleware' => [
      'auth:api',
    ],
]);
