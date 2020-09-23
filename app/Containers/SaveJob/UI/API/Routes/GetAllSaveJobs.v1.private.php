<?php

/**
 * @apiGroup           SaveJob
 * @apiName            getAllSaveJobs
 *
 * @api                {GET} /v1/savejobs Endpoint title here..
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
$router->get('savejobs', [
    'as' => 'api_savejob_get_all_save_jobs',
    'uses'  => 'Controller@getAllSaveJobs',
    'middleware' => [
      'auth:api',
    ],
]);
