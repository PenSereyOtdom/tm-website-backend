<?php

namespace App\Containers\Carrers\UI\API\Transformers;

use App\Containers\Carrers\Models\Carrers;
use App\Ship\Parents\Transformers\Transformer;

class CarrersTransformer extends Transformer
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
     * @param Carrers $entity
     *
     * @return array
     */
    public function transform(Carrers $entity)
    {
        $response = [
            'object' => 'Carrers',
            'id' => $entity->getHashedKey(),
            'title'=> $entity->title,
            'content'=> $entity->content,
            'path'=> $entity->path,
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
