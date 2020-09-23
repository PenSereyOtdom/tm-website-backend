<?php

/**
 * @apiGroup           Languages
 * @apiName            updateLanguages
 *
 * @api                {PATCH} /v1/languages/:id Endpoint title here..
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
$router->patch('languages/{id}', [
    'as' => 'api_languages_update_languages',
    'uses'  => 'Controller@updateLanguages',
    'middleware' => [
      'auth:api',
    ],
]);
