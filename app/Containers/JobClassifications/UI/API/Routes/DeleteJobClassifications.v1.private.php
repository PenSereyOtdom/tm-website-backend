<?php

/**
 * @apiGroup           JobClassifications
 * @apiName            deleteJobClassifications
 *
 * @api                {DELETE} /v1/jobclassifications/:id Endpoint title here..
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
    "project_classification":"Engineering"
  }
}
 */

/** @var Route $router */
$router->delete('jobclassifications/{id}', [
    'as' => 'api_jobclassifications_delete_project_classifications',
    'uses'  => 'Controller@deleteJobClassifications',
    'middleware' => [
      'auth:api',
    ],
]);
