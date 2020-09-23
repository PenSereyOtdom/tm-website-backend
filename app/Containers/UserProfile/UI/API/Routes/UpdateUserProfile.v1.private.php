<?php

/**
 * @apiGroup           UserProfile
 * @apiName            updateUserProfile
 *
 * @api                {PATCH} api/v1/userprofile/:id Update User Profile
 * @apiDescription     This end point is use for updaten your user profile
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  first_name
 * @apiParam           {String}  last_name
 * @apiParam           {String}  email
 *
 * @apiSuccessExample  {json}  Success-Response:
 *HTTP/1.1 200 OK
{
"data": {
 *      'object' => 'UserProfile',
        'id' => $entity->getHashedKey(),
        'full_name'=> $entity->full_name,
        'email'=> $entity->email,
        'major'=> $entity->major,
        'gender'=> $entity->gender,
        'contact'=> $entity->contact,
        'address'=> $entity->address,
        'created_at' => $entity->created_at,
        'updated_at' => $entity->updated_at,
 *
}
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 *
 */

/** @var Route $router */
$router->patch('userprofile/{id}', [
    'as' => 'api_userprofile_update_user_profile',
    'uses'  => 'Controller@updateUserProfile',
    'middleware' => [
      'auth:api',
    ],
]);
