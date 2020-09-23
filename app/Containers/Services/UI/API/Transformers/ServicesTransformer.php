<?php

namespace App\Containers\Services\UI\API\Transformers;

use App\Containers\Services\Models\Services;
use App\Ship\Parents\Transformers\Transformer;

class ServicesTransformer extends Transformer
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
     * @param Services $entity
     *
     * @return array
     */
    public function transform(Services $entity)
    {
        $response = [
            'object' => 'Services',
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
