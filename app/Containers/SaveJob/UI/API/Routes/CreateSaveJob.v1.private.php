<?php

/**
 * @apiGroup           SaveJob
 * @apiName            createSaveJob
 *
 * @api                {POST} /v1/savejobs Endpoint title here..
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
$router->post('savejobs', [
    'as' => 'api_savejob_create_save_job',
    'uses'  => 'Controller@createSaveJob',
    'middleware' => [
      'auth:api',
    ],
]);
