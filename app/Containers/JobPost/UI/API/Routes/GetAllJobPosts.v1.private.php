<?php

/**
 * @apiGroup           JobPost
 * @apiName            getAllJobPosts
 *
 * @api                {GET} /v1/jobposts Get all job post
 * @apiDescription     Get all job post or find by status, email, name
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  status
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
    {
    "data": {
     *       'object' => 'JobPosts',
            'id' => $entity->getHashedKey(),
            'project_title' => $entity->project_title,
            'project_classification'=> $entity->project_classification,
            'project_opening_category'=> $entity->project_opening_category,
            'project_type'=> $entity->project_type,
            'location'=> $entity->location,
            'salary'=> $entity->salary,
            'number_of_hiring'=> $entity->number_of_hiring,
            'qualification'=> $entity->qualification,
            'experience_level'=> $entity->experience_level,
            'language'=> $entity->language,
            'description'=> $entity->description,
            'requirement'=> $entity->requirement,
            'phone_number'=> $entity->phone_number,
            'email'=> $entity->email,
            'closing_date'=> $entity->closing_date,
            'project_priority'=> $entity->project_priority,
            'condition'=> $entity->condition,
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
 * @apiErrorExample  {json}       Error-Response:
 *   {
 *      "message":"Invalid Input.",
 *      "errors":{
 *         "ach_title":[
 *            "The ach_title field is required."
 *         ]
 *      },
 *      "status_code":422
 *   }
 */

/** @var Route $router */
$router->get('jobposts', [
    'as' => 'api_jobpost_get_all_job_posts',
    'uses'  => 'Controller@getAllJobPosts',
    'middleware' => [
      'auth:api',
    ],
]);
