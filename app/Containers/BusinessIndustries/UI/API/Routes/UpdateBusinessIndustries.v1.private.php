<?php

/**
 * @apiGroup           BusinessIndustries
 * @apiName            updateBusinessIndustries
 *
 * @api                {PATCH} /v1/businessindustries/:id Endpoint title here..
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
    "business_industry":"Sales"
  }
}
 */

/** @var Route $router */
$router->patch('businessindustries/{id}', [
    'as' => 'api_businessindustries_update_business_industries',
    'uses'  => 'Controller@updateBusinessIndustries',
    'middleware' => [
      'auth:api',
    ],
]);
