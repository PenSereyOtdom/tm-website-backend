<?php

namespace App\Containers\ExperienceLevels\UI\API\Transformers;

use App\Containers\ExperienceLevels\Models\ExperienceLevels;
use App\Ship\Parents\Transformers\Transformer;

class ExperienceLevelsTransformer extends Transformer
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
     * @param ExperienceLevels $entity
     *
     * @return array
     */
    public function transform(ExperienceLevels $entity)
    {
        $response = [
            'object' => 'ExperienceLevels',
            'id' => $entity->getHashedKey(),
            'experience_level'=> $entity->experience_level,
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
