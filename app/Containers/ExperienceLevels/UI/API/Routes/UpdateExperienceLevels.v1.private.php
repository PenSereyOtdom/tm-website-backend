<?php

/**
 * @apiGroup           ExperienceLevels
 * @apiName            updateExperienceLevels
 *
 * @api                {PATCH} /v1/experiencelevels/:id Endpoint title here..
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
$router->patch('experiencelevels/{id}', [
    'as' => 'api_experiencelevels_update_experience_levels',
    'uses'  => 'Controller@updateExperienceLevels',
    'middleware' => [
      'auth:api',
    ],
]);
