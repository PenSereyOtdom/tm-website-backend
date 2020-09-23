<?php

/**
 * @apiGroup           ServiceApprovals
 * @apiName            deleteServiceApprovals
 *
 * @api                {DELETE} /v1/serviceapprovals/:id Endpoint title here..
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
$router->delete('serviceapprovals/{id}', [
    'as' => 'api_serviceapprovals_delete_service_approvals',
    'uses'  => 'Controller@deleteServiceApprovals',
    'middleware' => [
      'auth:api',
    ],
]);
