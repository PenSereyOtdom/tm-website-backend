<?php

/**
 * @apiGroup           ServiceApprovals
 * @apiName            findServiceApprovalsById
 *
 * @api                {GET} /v1/serviceapprovals/:id Endpoint title here..
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
$router->get('serviceapprovals/{id}', [
    'as' => 'api_serviceapprovals_find_service_approvals_by_id',
    'uses'  => 'Controller@findServiceApprovalsById',
    'middleware' => [
      'auth:api',
    ],
]);
