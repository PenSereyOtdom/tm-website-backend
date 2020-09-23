<?php

/**
 * @apiGroup           JobTypes
 * @apiName            getAllJobTypes
 *
 * @api                {GET} /v1/jobtypes Endpoint title here..
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
$router->get('jobtypes', [
    'as' => 'api_jobtypes_get_all_project_types',
    'uses'  => 'Controller@getAllJobTypes',
    'middleware' => [
      'auth:api',
    ],
]);
