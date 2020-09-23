<?php

/**
 * @apiGroup           CV
 * @apiName            updateCV
 *
 * @api                {PATCH} /v1/cvs/:id Endpoint title here..
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
    "full_name":"Sorn Phaneth",
    "email":"phanethsorn@gmail.com",
    "phone_number":"098892321",
    "summary":"summary",
    "gender":"Female",
    "dob":"07/04/1999",
    "skill":"web"
  }
}
 */

/** @var Route $router */
$router->patch('cvs/{id}', [
    'as' => 'api_cv_update_c_v',
    'uses'  => 'Controller@updateCV',
    'middleware' => [
      'auth:api',
    ],
]);
