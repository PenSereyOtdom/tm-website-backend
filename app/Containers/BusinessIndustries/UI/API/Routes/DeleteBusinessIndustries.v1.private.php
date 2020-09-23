<?php

/**
 * @apiGroup           BusinessIndustries
 * @apiName            deleteBusinessIndustries
 *
 * @api                {DELETE} /v1/businessindustries/:id Endpoint title here..
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
$router->delete('businessindustries/{id}', [
    'as' => 'api_businessindustries_delete_business_industries',
    'uses'  => 'Controller@deleteBusinessIndustries',
    'middleware' => [
      'auth:api',
    ],
]);
