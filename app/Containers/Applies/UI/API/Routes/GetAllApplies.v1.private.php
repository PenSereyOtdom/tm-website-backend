<?php

/**
 * @apiGroup           Applies
 * @apiName            getAllApplies
 *
 * @api                {GET} api/v1/applies Endpoint title here..
 * @apiDescription     get all applies candidate
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
    {
    "data": {
     *       "confirmed": "",
     * .....
    }
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"401 Credentials Incorrect.",
 *      "status_code":401
 *   }
 */

/** @var Route $router */
$router->get('applies', [
    'as' => 'api_applies_get_all_applies',
    'uses'  => 'Controller@getAllApplies',
    'middleware' => [
      'auth:api',
    ],
]);
