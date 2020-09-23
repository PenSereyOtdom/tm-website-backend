<?php

/**
 * @apiGroup           DailyReport
 * @apiName            findDailyReportById
 *
 * @api                {GET} /v1/dailyreports/:id Endpoint title here..
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
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('dailyreports/{id}', [
    'as' => 'api_dailyreport_find_daily_report_by_id',
    'uses'  => 'Controller@findDailyReportById',
    'middleware' => [
      'auth:api',
    ],
]);
