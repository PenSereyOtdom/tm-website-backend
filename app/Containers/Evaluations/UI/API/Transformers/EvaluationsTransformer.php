<?php

namespace App\Containers\Evaluations\UI\API\Transformers;

use App\Containers\Evaluations\Models\Evaluations;
use App\Ship\Parents\Transformers\Transformer;

class EvaluationsTransformer extends Transformer
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
     * @param Evaluations $entity
     *
     * @return array
     */
    public function transform(Evaluations $entity)
    {
        $response = [
            'object' => 'Evaluations',
            'id' => $entity->getHashedKey(),
            'politeness'=> $entity->politeness,
            'speed'=> $entity->speed,
            'knowledge'=> $entity->knowledge,
            'comment'=> $entity->comment,
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
