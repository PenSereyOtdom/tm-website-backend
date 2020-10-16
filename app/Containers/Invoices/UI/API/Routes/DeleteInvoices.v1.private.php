<?php

/**
 * @apiGroup           Invoices
 * @apiName            deleteInvoices
 *
 * @api                {DELETE} /v1/invoices/:id Endpoint title here..
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
$router->delete('invoices/{id}', [
    'as' => 'api_invoices_delete_invoices',
    'uses'  => 'Controller@deleteInvoices',
    'middleware' => [
      'auth:api',
    ],
]);
