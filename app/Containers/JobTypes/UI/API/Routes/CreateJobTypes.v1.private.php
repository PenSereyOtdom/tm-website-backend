<?php

/**
 * @apiGroup           JobTypes
 * @apiName            createJobTypes
 *
 * @api                {POST} /v1/jobtypes Endpoint title here..
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
$router->post('jobtypes', [
    'as' => 'api_jobtypes_create_project_types',
    'uses'  => 'Controller@createJobTypes',
    'middleware' => [
      'auth:api',
    ],
]);
