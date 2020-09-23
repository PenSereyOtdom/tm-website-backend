<?php

/**
 * @apiGroup           SalaryRanges
 * @apiName            findSalaryRangesById
 *
 * @api                {GET} /v1/salaryranges/:id Endpoint title here..
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
$router->get('salaryranges/{id}', [
    'as' => 'api_salaryranges_find_salary_ranges_by_id',
    'uses'  => 'Controller@findSalaryRangesById',
    'middleware' => [
      'auth:api',
    ],
]);
