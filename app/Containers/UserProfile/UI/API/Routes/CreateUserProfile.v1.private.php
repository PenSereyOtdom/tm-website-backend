<?php

/**
 * @apiGroup           UserProfile
 * @apiName            createUserProfile
 *
 * @api                {POST} api/v1/userprofile
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  first_name
 * @apiParam           {String}  last_name
 * @apiParam           {String}  email
 * @apiParam           {String}  major
 * @apiParam           {String}  gender
 * @apiParam           {String}  contact
 * @apiParam           {String}  address
 * @apiParam           {String}  status
 * @apiParam           {String}  profile_img
 * @apiParam           {String}  facebook
 * @apiParam           {String}  twitter
 * @apiParam           {String}  github
 * @apiParam           {String}  linkedin
 * @apiParam           {String}  website
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  "data": {
    "full_name":"Sorn Phaneth",
    "email":"phanethsorn@gmail.com",
    "contact":"098892321",
    "major":"It",
    "gender":"Female",
    "address":"Kandal"
  }
}
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"Invalid Input.",
 *      "errors":{
 *         "first_name":[
 *            "The ach_title field is required."
 *         ]
 *      },
 *      "status_code":422
 *   }
 */

/** @var Route $router */
$router->post('userprofile', [
    'as' => 'api_userprofile_create_user_profile',
    'uses'  => 'Controller@createUserProfile',
    'middleware' => [
      'auth:api',
    ],
]);
