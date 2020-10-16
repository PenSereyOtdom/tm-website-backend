<?php

namespace App\Containers\CV\UI\API\Transformers;

use App\Containers\CV\Models\CV;
use App\Ship\Parents\Transformers\Transformer;

class CVTransformer extends Transformer
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
     * @param CV $entity
     *
     * @return array
     */
    public function transform(CV $entity)
    {
        $response = [
            'object' => 'CV',
            'id' => $entity->id,
            'full_name'=> $entity->full_name,
            'email'=> $entity->email,
            'phone_number'=> $entity->phone_number,
            'summary'=> $entity->summary,
            'gender'=> $entity->gender,
            'dob'=> $entity->dob,
            'skill'=> $entity->skill,
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
