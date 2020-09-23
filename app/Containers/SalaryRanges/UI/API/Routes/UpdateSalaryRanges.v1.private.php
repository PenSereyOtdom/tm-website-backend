<?php

/**
 * @apiGroup           SalaryRanges
 * @apiName            updateSalaryRanges
 *
 * @api                {PATCH} /v1/salaryranges/:id Endpoint title here..
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
$router->patch('salaryranges/{id}', [
    'as' => 'api_salaryranges_update_salary_ranges',
    'uses'  => 'Controller@updateSalaryRanges',
    'middleware' => [
      'auth:api',
    ],
]);
