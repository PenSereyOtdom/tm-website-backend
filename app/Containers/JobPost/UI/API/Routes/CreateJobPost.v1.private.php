<?php
/**
 * @apiGroup           JobPost
 * @apiName            createJobPost
 *
 * @api                {POST} api/v1/jobposts create jobposts
 * @apiDescription      for create new job or project
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 * @apiHeader          Accept application/json
 *
 * @apiParam           {String}  project_title
 * @apiParam           {String}  project_classification
 * @apiParam           {String}  project_opening_category
 * @apiParam           {String}  project_type
 * @apiParam           {String}  location
 * @apiParam           {number}  salary
 * @apiParam           {String}  qualification
 * @apiParam           {String}  experience_level
 * @apiParam           {String}  language
 * @apiParam           {String}  project_priority
 * @apiParam           {String}  number_of_hiring
 * @apiParam           {Date}    closing_date
 * @apiParam           {String}  email
 * @apiParam           {number}  phone_number
 * @apiParam           {String}  description
 * @apiParam           {String}  requirement
 * @apiParam           {String}  condition
 * @apiParam           {String}  status
 * @apiParam           {String}  save
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
"data": {
 *      'object' => 'JobPosts',
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
 *         "project_title":[
 *            "The ach_title field is required."
 *         ]
 *      },
 *      "status_code":422
 *   }
 */


/** @var Route $router */
$router->post('jobposts', [
    'as' => 'api_jobpost_create_job_post',
    'uses'  => 'Controller@createJobPost',
    'middleware' => [
      'auth:api',
    ],
]);
