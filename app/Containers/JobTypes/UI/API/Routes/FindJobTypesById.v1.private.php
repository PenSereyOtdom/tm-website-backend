<?php

/**
 * @apiGroup           JobTypes
 * @apiName            findJobTypesById
 *
 * @api                {GET} /v1/jobtypes/:id Endpoint title here..
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
$router->get('jobtypes/{id}', [
    'as' => 'api_jobtypes_find_project_types_by_id',
    'uses'  => 'Controller@findJobTypesById',
    'middleware' => [
      'auth:api',
    ],
]);
