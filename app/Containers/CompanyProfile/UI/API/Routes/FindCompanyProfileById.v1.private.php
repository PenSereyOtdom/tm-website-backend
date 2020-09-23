<?php

/**
 * @apiGroup           CompanyProfile
 * @apiName            findCompanyProfileById
 *
 * @api                {GET} /v1/companyprofiles/:id Endpoint title here..
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
$router->get('companyprofiles/{id}', [
    'as' => 'api_companyprofile_find_company_profile_by_id',
    'uses'  => 'Controller@findCompanyProfileById',
    'middleware' => [
      'auth:api',
    ],
]);
