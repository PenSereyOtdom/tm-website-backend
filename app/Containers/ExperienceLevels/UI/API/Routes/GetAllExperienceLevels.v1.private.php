<?php

/**
 * @apiGroup           ExperienceLevels
 * @apiName            getAllExperienceLevels
 *
 * @api                {GET} /v1/experiencelevels Endpoint title here..
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
$router->get('experiencelevels', [
    'as' => 'api_experiencelevels_get_all_experience_levels',
    'uses'  => 'Controller@getAllExperienceLevels',
    'middleware' => [
      'auth:api',
    ],
]);
