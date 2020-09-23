<?php

/**
 * @apiGroup           SalaryRanges
 * @apiName            deleteSalaryRanges
 *
 * @api                {DELETE} /v1/salaryranges/:id Endpoint title here..
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
$router->delete('salaryranges/{id}', [
    'as' => 'api_salaryranges_delete_salary_ranges',
    'uses'  => 'Controller@deleteSalaryRanges',
    'middleware' => [
      'auth:api',
    ],
]);
