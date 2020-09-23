<?php

/**
 * @apiGroup           Qualifications
 * @apiName            updateQualifications
 *
 * @api                {PATCH} /v1/qualifications/:id Endpoint title here..
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
$router->patch('qualifications/{id}', [
    'as' => 'api_qualifications_update_qualifications',
    'uses'  => 'Controller@updateQualifications',
    'middleware' => [
      'auth:api',
    ],
]);
