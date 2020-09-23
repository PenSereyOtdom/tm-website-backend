<?php

/**
 * @apiGroup           UserProfile
 * @apiName            deleteUserProfile
 *
 * @api                {DELETE} /v1/userprofile/:id Endpoint title here..
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
$router->delete('userprofile/{id}', [
    'as' => 'api_userprofile_delete_user_profile',
    'uses'  => 'Controller@deleteUserProfile',
    'middleware' => [
      'auth:api',
    ],
]);
