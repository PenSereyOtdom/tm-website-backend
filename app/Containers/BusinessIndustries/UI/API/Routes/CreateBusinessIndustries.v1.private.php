<?php

/**
 * @apiGroup           BusinessIndustries
 * @apiName            createBusinessIndustries
 *
 * @api                {POST} /v1/businessindustries Endpoint title here..
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
$router->post('businessindustries', [
    'as' => 'api_businessindustries_create_business_industries',
    'uses'  => 'Controller@createBusinessIndustries',
    'middleware' => [
      'auth:api',
    ],
]);
