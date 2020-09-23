<?php

/**
 * @apiGroup           Languages
 * @apiName            findLanguagesById
 *
 * @api                {GET} /v1/languages/:id Endpoint title here..
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
$router->get('languages/{id}', [
    'as' => 'api_languages_find_languages_by_id',
    'uses'  => 'Controller@findLanguagesById',
    'middleware' => [
      'auth:api',
    ],
]);
