<?php

/**
 * @apiGroup           JobPost
 * @apiName            findJobPostById
 *
 * @api                {GET} /v1/jobposts/:id Endpoint title here..
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
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('jobposts/{id}', [
    'as' => 'api_jobpost_find_job_post_by_id',
    'uses'  => 'Controller@findJobPostById',
    'middleware' => [
      'auth:api',
    ],
]);
