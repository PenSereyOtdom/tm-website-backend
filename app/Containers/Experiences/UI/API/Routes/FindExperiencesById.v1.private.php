<?php

/**
 * @apiGroup           Experiences
 * @apiName            findExperiencesById
 *
 * @api                {GET} /v1/experiences/:id Endpoint title here..
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
    "exp_workplace_name":"Web",
    "exp_title":"IT",
    "exp_start_date":"03/07/2020",
    "exp_end_date":"03/09/2020",
    "exp_detail":"Testing"
  }
}
 */

/** @var Route $router */
$router->get('experiences/{id}', [
    'as' => 'api_experiences_find_experiences_by_id',
    'uses'  => 'Controller@findExperiencesById',
    'middleware' => [
      'auth:api',
    ],
]);
