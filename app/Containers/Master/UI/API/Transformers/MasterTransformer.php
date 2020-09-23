<?php

namespace App\Containers\Master\UI\API\Transformers;

use App\Containers\Master\Models\Master;
use App\Ship\Parents\Transformers\Transformer;

class MasterTransformer extends Transformer
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
     * @param Master $entity
     *
     * @return array
     */
    public function transform(Master $entity)
    {
        $response = [
            'object' => 'Master',
            'id' => $entity->getHashedKey(),
            'title'=> $entity->title,
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
