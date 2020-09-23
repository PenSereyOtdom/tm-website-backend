<?php

/**
 * @apiGroup           JobClassifications
 * @apiName            getAllJobClassifications
 *
 * @api                {GET} /v1/jobclassifications Endpoint title here..
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
$router->get('jobclassifications', [
    'as' => 'api_jobclassifications_get_all_project_classifications',
    'uses'  => 'Controller@getAllJobClassifications',
    'middleware' => [
      'auth:api',
    ],
]);
