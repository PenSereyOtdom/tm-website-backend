<?php

/**
 * @apiGroup           DailyReport
 * @apiName            updateDailyReport
 *
 * @api                {PATCH} /v1/dailyreports/:id Endpoint title here..
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
$router->patch('dailyreports/{id}', [
    'as' => 'api_dailyreport_update_daily_report',
    'uses'  => 'Controller@updateDailyReport',
    'middleware' => [
      'auth:api',
    ],
]);
