<?php

/**
 * @apiGroup           Qualifications
 * @apiName            deleteQualifications
 *
 * @api                {DELETE} /v1/qualifications/:id Endpoint title here..
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
$router->delete('qualifications/{id}', [
    'as' => 'api_qualifications_delete_qualifications',
    'uses'  => 'Controller@deleteQualifications',
    'middleware' => [
      'auth:api',
    ],
]);
