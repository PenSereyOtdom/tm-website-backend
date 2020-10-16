<?php

/**
 * @apiGroup           CompanyProfile
 * @apiName            updateCompanyProfile
 *
 * @api                {PATCH} api/v1/companyprofiles/:id
 * @apiDescription     update company profile
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  full_name
 * @apiParam           {String}  email
 * @apiParam           {String}  img_profile
 * @apiParam           {String}  overview
 * @apiParam           {String}  company_name
 * @apiParam           {String}  address
 * @apiParam           {number}  representative
 * @apiParam           {String}  person_in_charge
 * @apiParam           {String}  contact
 * @apiParam           {String}  year_of_establishment
 * @apiParam           {String}  annul_sales
 * @apiParam           {String}  number_of_employees
 * @apiParam           {Date}    overview_history
 * @apiParam           {String}  main_supplier
 * @apiParam           {number}  main_client
 * @apiParam           {String}  business_detail
 * @apiParam           {String}  area_of_expertise
 * @apiParam           {String}  construction
 * @apiParam           {String}  target_layer
 * @apiParam           {String}  url_name
 * @apiParam           {String}  other
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
    {
    "data": {
        'object' => 'CompanyProfile',
        'id' => $entity->getHashedKey(),
        'full_name'=> $entity->full_name,
        'email'=> $entity->email,
        'img_profile'=> $entity->img_profile,
        'overview'=> $entity->overview,
        'company_name'=> $entity->company_name,
        'address'=> $entity->address,
        'representative'=> $entity->representative,
        'person_in_charge'=> $entity->person_in_charge,
        'contact'=> $entity->contact,
        'year_of_establishment'=> $entity->year_of_establishment,
        'annul_sales'=> $entity->annul_sales,
        'number_of_employees'=> $entity->number_of_employees,
        'overview_history'=> $entity->overview_history,
        'main_supplier'=> $entity->main_supplier,
        'main_client'=> $entity->main_client,
        'business_detail'=> $entity->business_detail,
        'area_of_expertise'=> $entity->area_of_expertise,
        'construction'=> $entity->construction,
        'target_layer'=> $entity->target_layer,
        'url_name'=> $entity->url_name,
        'other'=> $entity->other,
        'created_at' => $entity->created_at,
        'updated_at' => $entity->updated_at,
    }
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 *
 *
 *   }
 * /

/** @var Route $router */
/** @var Route $router */

$router->put('companyprofiles/{id}', [
    'as' => 'api_companyprofile_update_company_profile',
    'uses'  => 'Controller@updateCompanyProfile',
    'middleware' => [
      'auth:api',
    ],
]);
