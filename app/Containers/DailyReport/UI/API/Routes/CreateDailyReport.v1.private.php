<?php

/**
 * @apiGroup           DailyReport
 * @apiName            createDailyReport
 *
 * @api                {POST} /v1/dailyreports Endpoint title here..
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
$router->post('dailyreports', [
    'as' => 'api_dailyreport_create_daily_report',
    'uses'  => 'Controller@createDailyReport',
    'middleware' => [
      'auth:api',
    ],
]);
