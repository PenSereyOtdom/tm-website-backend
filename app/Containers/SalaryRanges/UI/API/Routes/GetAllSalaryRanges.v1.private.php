<?php

/**
 * @apiGroup           SalaryRanges
 * @apiName            getAllSalaryRanges
 *
 * @api                {GET} /v1/salaryranges Endpoint title here..
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
    "salaryrange":"400"
  }
}
 */

/** @var Route $router */
$router->get('salaryranges', [
    'as' => 'api_salaryranges_get_all_salary_ranges',
    'uses'  => 'Controller@getAllSalaryRanges',
    'middleware' => [
      'auth:api',
    ],
]);
