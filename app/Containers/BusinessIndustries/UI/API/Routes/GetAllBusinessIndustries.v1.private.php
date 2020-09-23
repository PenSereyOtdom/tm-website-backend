<?php

/**
 * @apiGroup           BusinessIndustries
 * @apiName            getAllBusinessIndustries
 *
 * @api                {GET} /v1/businessindustries Endpoint title here..
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
$router->get('businessindustries', [
    'as' => 'api_businessindustries_get_all_business_industries',
    'uses'  => 'Controller@getAllBusinessIndustries',
    'middleware' => [
      'auth:api',
    ],
]);
