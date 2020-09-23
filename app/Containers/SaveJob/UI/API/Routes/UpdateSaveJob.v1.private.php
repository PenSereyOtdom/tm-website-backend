<?php

/**
 * @apiGroup           SaveJob
 * @apiName            updateSaveJob
 *
 * @api                {PATCH} /v1/savejobs/:id Endpoint title here..
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
$router->patch('savejobs/{id}', [
    'as' => 'api_savejob_update_save_job',
    'uses'  => 'Controller@updateSaveJob',
    'middleware' => [
      'auth:api',
    ],
]);
