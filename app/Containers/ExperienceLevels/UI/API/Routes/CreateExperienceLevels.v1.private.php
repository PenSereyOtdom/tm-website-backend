<?php

/**
 * @apiGroup           ExperienceLevels
 * @apiName            createExperienceLevels
 *
 * @api                {POST} /v1/experiencelevels Endpoint title here..
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
    "experience_level":"Fresh graduate"
  }
}
 */

/** @var Route $router */
$router->post('experiencelevels', [
    'as' => 'api_experiencelevels_create_experience_levels',
    'uses'  => 'Controller@createExperienceLevels',
    'middleware' => [
      'auth:api',
    ],
]);
