<?php

/**
 * @apiGroup           Languages
 * @apiName            createLanguages
 *
 * @api                {POST} /v1/languages Endpoint title here..
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
$router->post('languages', [
    'as' => 'api_languages_create_languages',
    'uses'  => 'Controller@createLanguages',
    'middleware' => [
      'auth:api',
    ],
]);
