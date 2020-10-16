<?php

/**
 * @apiGroup           Education
 * @apiName            updateEducation
 *
 * @api                {PATCH} /v1/education/:id Endpoint title here..
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
$router->put('education/{id}', [
    'as' => 'api_education_update_education',
    'uses'  => 'Controller@updateEducation',
    'middleware' => [
      'auth:api',
    ],
]);
