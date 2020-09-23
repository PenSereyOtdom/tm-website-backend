<?php

namespace App\Containers\SaveJob\UI\API\Transformers;

use App\Containers\SaveJob\Models\SaveJob;
use App\Ship\Parents\Transformers\Transformer;

class SaveJobTransformer extends Transformer
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
     * @param SaveJob $entity
     *
     * @return array
     */
    public function transform(SaveJob $entity)
    {
        $response = [
            'object' => 'SaveJob',
            'id' => $entity->getHashedKey(),
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
