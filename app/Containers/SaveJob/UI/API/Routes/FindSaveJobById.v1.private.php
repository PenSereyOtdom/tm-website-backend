<?php

/**
 * @apiGroup           SaveJob
 * @apiName            findSaveJobById
 *
 * @api                {GET} /v1/savejobs/:id Endpoint title here..
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
$router->get('savejobs/{id}', [
    'as' => 'api_savejob_find_save_job_by_id',
    'uses'  => 'Controller@findSaveJobById',
    'middleware' => [
      'auth:api',
    ],
]);
