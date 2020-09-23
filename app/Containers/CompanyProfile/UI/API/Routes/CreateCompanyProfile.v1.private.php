<?php

/**
 * @apiGroup           CompanyProfile
 * @apiName            createCompanyProfile
 *
 * @api                {POST} /v1/companyprofiles Endpoint title here..
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
  "data": {
    "full_name": "ABA coltd",
    "email": "aba@gmail.com",
    "img_profile": "aba",
    "overview": "aba",
    "company_name":"ABA",
    "address":"Kadal",
    "representative":"hmm ot dg te",
    "person_in_charge":"Phaneth dg",
    "contact":"098892321",
    "year_of_establishment":"4",
    "annul_sales":"23",
    "number_of_employees":"123",
    "overview_history":"hmm",
    "main_supplier":"hmm",
    "main_client":"hmm",
    "business_detail":"hmm",
    "area_of_expertise":"jmm",
    "construation":"hmm",
    "target_layer":"hmm",
    "url_name":"hmmm"  
  } 
}
 */

/** @var Route $router */
$router->post('companyprofiles', [
    'as' => 'api_companyprofile_create_company_profile',
    'uses'  => 'Controller@createCompanyProfile',
    'middleware' => [
      'auth:api',
    ],
]);
