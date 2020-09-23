<?php

/**
 * @apiGroup           CompanyProfile
 * @apiName            deleteCompanyProfile
 *
 * @api                {DELETE} /v1/companyprofiles/:id Endpoint title here..
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
$router->delete('companyprofiles/{id}', [
    'as' => 'api_companyprofile_delete_company_profile',
    'uses'  => 'Controller@deleteCompanyProfile',
    'middleware' => [
      'auth:api',
    ],
]);
