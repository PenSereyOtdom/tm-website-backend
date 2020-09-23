<?php

/**
 * @apiGroup           ExperienceLevels
 * @apiName            findExperienceLevelsById
 *
 * @api                {GET} /v1/experiencelevels/:id Endpoint title here..
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
$router->get('experiencelevels/{id}', [
    'as' => 'api_experiencelevels_find_experience_levels_by_id',
    'uses'  => 'Controller@findExperienceLevelsById',
    'middleware' => [
      'auth:api',
    ],
]);
