<?php

/**
 * @apiGroup           Achievements
 * @apiName            createAchievements
 *
 * @api                {POST} api/v1/achievements Endpoint title here..
 * @apiDescription     Create achievement
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  ach_title
 * @apiParam           {date}  ach_date
 * @apiParam           {String} ach_detail
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
    {
        "data": {
         *       "ach_title": "",
         *       "ach_date": "",
         *       "ach_detail": ""
    }
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 *
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"Invalid Input.",
 *      "errors":{
 *         "ach_title":[
 *            "The ach_title field is required."
 *         ]
 *      },
 *      "status_code":422
 *   }
 */

/** @var Route $router */
$router->post('achievements', [
    'as' => 'api_achievements_create_achievements',
    'uses'  => 'Controller@createAchievements',
    'middleware' => [
      'auth:api',
    ],
]);
