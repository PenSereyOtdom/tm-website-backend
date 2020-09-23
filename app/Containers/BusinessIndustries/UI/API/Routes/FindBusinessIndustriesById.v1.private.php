<?php

/**
 * @apiGroup           BusinessIndustries
 * @apiName            findBusinessIndustriesById
 *
 * @api                {GET} /v1/businessindustries/:id Endpoint title here..
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
$router->get('businessindustries/{id}', [
    'as' => 'api_businessindustries_find_business_industries_by_id',
    'uses'  => 'Controller@findBusinessIndustriesById',
//    'middleware' => [
//      'auth:api',
//    ],
]);
