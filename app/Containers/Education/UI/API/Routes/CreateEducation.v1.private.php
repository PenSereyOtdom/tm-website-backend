<?php

/**
 * @apiGroup           Education
 * @apiName            createEducation
 *
 * @api                {POST} /v1/education Endpoint title here..
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
$router->post('education', [
    'as' => 'api_education_create_education',
    'uses'  => 'Controller@createEducation',
    'middleware' => [
      'auth:api',
    ],
]);
