<?php

/**
 * @apiGroup           Qualifications
 * @apiName            findQualificationsById
 *
 * @api                {GET} /v1/qualifications/:id Endpoint title here..
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
$router->get('qualifications/{id}', [
    'as' => 'api_qualifications_find_qualifications_by_id',
    'uses'  => 'Controller@findQualificationsById',
    'middleware' => [
      'auth:api',
    ],
]);
