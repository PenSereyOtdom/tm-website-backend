<?php

/**
 * @apiGroup           UserProfile
 * @apiName            findUserProfileById
 *
 * @api                {GET} /v1/userprofile/:id Endpoint title here..
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
$router->get('userprofile/{id}', [
    'as' => 'api_userprofile_find_user_profile_by_id',
    'uses'  => 'Controller@findUserProfileById',
    'middleware' => [
      'auth:api',
    ],
]);
