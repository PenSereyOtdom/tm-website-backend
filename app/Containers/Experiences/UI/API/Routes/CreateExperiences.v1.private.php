<?php

/**
 * @apiGroup           Experiences
 * @apiName            createExperiences
 *
 * @api                {POST} /v1/experiences Endpoint title here..
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
$router->post('experiences', [
    'as' => 'api_experiences_create_experiences',
    'uses'  => 'Controller@createExperiences',
    'middleware' => [
      'auth:api',
    ],
]);
