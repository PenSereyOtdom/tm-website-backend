<?php

/**
 * @apiGroup           Users
 * @apiName            getAllClients
 * @api                {get} /v1/clients Get All Client Users
 * @apiDescription     Get All Users where role `Client`.
 *                     You can search for Users by email, name and ID.
 *                     Example: `?search=Mahmoud` or `?search=whatever@mail.com`.
 *                     You can specify the field as follow `?search=email:whatever@mail.com` or `?search=id:20`.
 *                     You can search by multiple fields as follow: `?search=name:Mahmoud&email:whatever@mail.com`.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 * @apiHeader          Accept application/json
 * @apiParam           {String}  status
 * @apiParam           {String}  experience
 * @apiParam           {String}  email
 * @apiParam           {String}  name
 *
 * @apiUse             GeneralSuccessMultipleResponse
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
    {
    "data": {
     *       "name": "",
     *       "email": "",
     *       "status": ""
     * .....
    }
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 *
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"Invalid Input.",
 *      "errors":{
 *         "status":[
 *            "The ach_title field is required."
 *         ]
 *      },
 *      "status_code":422
 *   }
 */

$router->get('clients', [
    'as' => 'api_user_get_all_clients',
    'uses'       => 'Controller@getAllClients',
    'middleware' => [
        'auth:api',
    ],
]);
