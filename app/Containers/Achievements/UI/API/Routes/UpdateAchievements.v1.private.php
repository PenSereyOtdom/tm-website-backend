<?php

/**
 * @apiGroup           Achievements
 * @apiName            updateAchievements
 *
 * @api                {PATCH} /v1/achievements/:id Endpoint title here..
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
    "ach_title":"Win",
    "ach_date":"03/07/2020",
    "ach_detail":"Testing"
  }
}
 */

/** @var Route $router */
$router->patch('achievements/{id}', [
    'as' => 'api_achievements_update_achievements',
    'uses'  => 'Controller@updateAchievements',
    'middleware' => [
      'auth:api',
    ],
]);
