<?php

/**
 * @apiGroup           JobClassifications
 * @apiName            updateJobClassifications
 *
 * @api                {PATCH} /v1/jobclassifications/:id Endpoint title here..
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
$router->patch('jobclassifications/{id}', [
    'as' => 'api_jobclassifications_update_project_classifications',
    'uses'  => 'Controller@updateJobClassifications',
    'middleware' => [
      'auth:api',
    ],
]);
