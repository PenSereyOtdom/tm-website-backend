<?php

namespace App\Containers\Education\UI\API\Transformers;

use App\Containers\Education\Models\Education;
use App\Ship\Parents\Transformers\Transformer;

class EducationTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Education $entity
     *
     * @return array
     */
    public function transform(Education $entity)
    {
        $response = [
            'object' => 'Education',
            'id' => $entity->id,
            'school_name'=> $entity->school_name,
            'major'=> $entity->major,
            'degree'=> $entity->degree,
            'edu_start_date'=> $entity->edu_start_date,
            'edu_end_date'=> $entity->edu_end_date,
            'edu_detail'=> $entity->edu_detail,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
