<?php

/**
 * @apiGroup           CompanyProfile
 * @apiName            getAllCompanyProfiles
 *
 * @api                {GET} /v1/companyprofiles Endpoint title here..
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
$router->get('companyprofiles', [
    'as' => 'api_companyprofile_get_all_company_profiles',
    'uses'  => 'Controller@getAllCompanyProfiles',
    'middleware' => [
      'auth:api',
    ],
]);
