<?php

/**
 * @apiGroup           ServiceApprovals
 * @apiName            updateServiceApprovals
 *
 * @api                {PATCH} /v1/serviceapprovals/:id Endpoint title here..
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
$router->patch('serviceapprovals/{id}', [
    'as' => 'api_serviceapprovals_update_service_approvals',
    'uses'  => 'Controller@updateServiceApprovals',
    'middleware' => [
      'auth:api',
    ],
]);
