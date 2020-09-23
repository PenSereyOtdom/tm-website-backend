<?php

namespace App\Containers\JobClassifications\UI\API\Transformers;

use App\Containers\JobClassifications\Models\JobClassifications;
use App\Ship\Parents\Transformers\Transformer;

class JobClassificationsTransformer extends Transformer
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
     * @param JobClassifications $entity
     *
     * @return array
     */
    public function transform(JobClassifications $entity)
    {
        $response = [
            'object' => 'JobClassifications',
            'id' => $entity->getHashedKey(),
            'project_classification'=> $entity->project_classification,
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
