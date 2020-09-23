<?php

/**
 * @apiGroup           JobClassifications
 * @apiName            createJobClassifications
 *
 * @api                {POST} /v1/jobclassifications Endpoint title here..
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
$router->post('jobclassifications', [
    'as' => 'api_jobclassifications_create_project_classifications',
    'uses'  => 'Controller@createJobClassifications',
    'middleware' => [
      'auth:api',
    ],
]);
