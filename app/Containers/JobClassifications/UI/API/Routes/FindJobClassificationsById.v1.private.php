<?php

/**
 * @apiGroup           JobClassifications
 * @apiName            findJobClassificationsById
 *
 * @api                {GET} /v1/jobclassifications/:id Endpoint title here..
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
$router->get('jobclassifications/{id}', [
    'as' => 'api_jobclassifications_find_project_classifications_by_id',
    'uses'  => 'Controller@findJobClassificationsById',
    'middleware' => [
      'auth:api',
    ],
]);
