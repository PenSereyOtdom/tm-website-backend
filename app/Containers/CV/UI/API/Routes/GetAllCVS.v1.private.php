<?php

/**
 * @apiGroup           CV
 * @apiName            getAllCVS
 *
 * @api                {GET} /v1/cvs Endpoint title here..
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
$router->get('cvs', [
    'as' => 'api_cv_get_all_c_v_s',
    'uses'  => 'Controller@getAllCVS',
    'middleware' => [
      'auth:api',
    ],
]);
