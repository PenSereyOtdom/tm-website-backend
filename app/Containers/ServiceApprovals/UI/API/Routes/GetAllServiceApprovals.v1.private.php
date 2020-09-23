<?php

/**
 * @apiGroup           ServiceApprovals
 * @apiName            getAllServiceApprovals
 *
 * @api                {GET} /v1/serviceapprovals Endpoint title here..
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
$router->get('serviceapprovals', [
    'as' => 'api_serviceapprovals_get_all_service_approvals',
    'uses'  => 'Controller@getAllServiceApprovals',
    'middleware' => [
      'auth:api',
    ],
]);
