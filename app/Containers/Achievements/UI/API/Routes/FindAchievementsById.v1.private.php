<?php

/**
 * @apiGroup           Achievements
 * @apiName            findAchievementsById
 *
 * @api                {GET} /v1/achievements/:id Endpoint title here..
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
$router->get('achievements/{id}', [
    'as' => 'api_achievements_find_achievements_by_id',
    'uses'  => 'Controller@findAchievementsById',
    'middleware' => [
      'auth:api',
    ],
]);
