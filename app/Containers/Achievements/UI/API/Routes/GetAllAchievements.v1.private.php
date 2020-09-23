<?php

/**
 * @apiGroup           Achievements
 * @apiName            getAllAchievements
 *
 * @api                {GET} /v1/achievements Endpoint title here..
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
$router->get('achievements', [
    'as' => 'api_achievements_get_all_achievements',
    'uses'  => 'Controller@getAllAchievements',
    'middleware' => [
      'auth:api',
    ],
]);
