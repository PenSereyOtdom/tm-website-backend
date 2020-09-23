<?php

/**
 * @apiGroup           DailyReport
 * @apiName            getAllDailyReports
 *
 * @api                {GET} /v1/dailyreports Endpoint title here..
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
$router->get('dailyreports', [
    'as' => 'api_dailyreport_get_all_daily_reports',
    'uses'  => 'Controller@getAllDailyReports',
    'middleware' => [
      'auth:api',
    ],
]);
