<?php

/**
 * @apiGroup           Languages
 * @apiName            getAllLanguages
 *
 * @api                {GET} /v1/languages Endpoint title here..
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
    "lang":"aa",
    "level":"bb"
  }
}
 */

/** @var Route $router */
$router->get('languages', [
    'as' => 'api_languages_get_all_languages',
    'uses'  => 'Controller@getAllLanguages',
    'middleware' => [
      'auth:api',
    ],
]);
