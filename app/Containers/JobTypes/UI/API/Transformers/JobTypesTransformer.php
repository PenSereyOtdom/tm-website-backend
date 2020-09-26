<?php

namespace App\Containers\JobTypes\UI\API\Transformers;

use App\Containers\JobTypes\Models\JobTypes;
use App\Ship\Parents\Transformers\Transformer;

class JobTypesTransformer extends Transformer
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
     * @param JobTypes $entity
     *
     * @return array
     */
    public function transform(JobTypes $entity)
    {
        $response = [
            'object' => 'JobTypes',
            'id' => $entity->getHashedKey(),
            'job_type' => $entity->job_type,
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
