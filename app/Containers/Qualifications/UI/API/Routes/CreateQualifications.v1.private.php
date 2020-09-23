<?php

/**
 * @apiGroup           Qualifications
 * @apiName            createQualifications
 *
 * @api                {POST} /v1/qualifications Endpoint title here..
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
  "data": {
    "qualification":"Engineering"
  }
}
 */

/** @var Route $router */
$router->post('qualifications', [
    'as' => 'api_qualifications_create_qualifications',
    'uses'  => 'Controller@createQualifications',
    'middleware' => [
      'auth:api',
    ],
]);
