<?php

/**
 * @apiGroup           JobPost
 * @apiName            deleteJobPost
 *
 * @api                {DELETE} /v1/jobposts/:id Endpoint title here..
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
$router->delete('jobposts/{id}', [
    'as' => 'api_jobpost_delete_job_post',
    'uses'  => 'Controller@deleteJobPost',
    'middleware' => [
      'auth:api',
    ],
]);
