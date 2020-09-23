<?php

/**
 * @apiGroup           CV
 * @apiName            createCV
 *
 * @api                {POST} /v1/cvs
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
$router->post('cvs', [
    'as' => 'api_cv_create_c_v',
    'uses'  => 'Controller@createCV',
    'middleware' => [
      'auth:api',
    ],
]);
