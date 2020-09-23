<?php

/**
 * @apiGroup           UserProfile
 * @apiName            getAllUserProfiles
 *
 * @api                {GET} /v1/userprofile Endpoint title here..
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
$router->get('userprofile', [
    'as' => 'api_userprofile_get_all_user_profiles',
    'uses'  => 'Controller@getAllUserProfiles',
    'middleware' => [
      'auth:api',
    ],
]);
