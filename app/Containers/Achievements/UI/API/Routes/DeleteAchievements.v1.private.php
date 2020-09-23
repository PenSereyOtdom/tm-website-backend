<?php

/**
 * @apiGroup           Achievements
 * @apiName            deleteAchievements
 *
 * @api                {DELETE} /v1/achievements/:id Endpoint title here..
 * @apiDescription     Delete Achievements
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
$router->delete('achievements/{id}', [
    'as' => 'api_achievements_delete_achievements',
    'uses'  => 'Controller@deleteAchievements',
    'middleware' => [
      'auth:api',
    ],
]);
