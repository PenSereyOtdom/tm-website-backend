<?php

/**
 * @apiGroup           SaveJob
 * @apiName            deleteSaveJob
 *
 * @api                {DELETE} /v1/savejobs/:id Endpoint title here..
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
$router->delete('savejobs/{id}', [
    'as' => 'api_savejob_delete_save_job',
    'uses'  => 'Controller@deleteSaveJob',
    'middleware' => [
      'auth:api',
    ],
]);
