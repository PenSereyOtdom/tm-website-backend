<?php

namespace App\Containers\JobPost\UI\API\Transformers;

use App\Containers\CompanyProfile\UI\API\Transformers\CompanyProfileTransformer;
use App\Containers\JobPost\Models\JobPost;
use App\Ship\Parents\Transformers\Transformer;

class JobPostTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
        'companyprofiles'
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param JobPost $entity
     *
     * @return array
     */
    public function transform(JobPost $entity)
    {
        $response = [
            'object' => 'JobPosts',
            'id' => $entity->id,
            'user_id' => $entity->user_id,
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
            'phone_number' => $entity->phone_number,
            'closing_date'=> $entity->closing_date,
            'project_priority'=> $entity->project_priority,
            'condition'=> $entity->condition,
            'status' => $entity->status,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
    public function includeCompanyProfiles(JobPost $entity){
        return $this->collection($entity->companyprofile, new CompanyProfileTransformer());
    }
}
