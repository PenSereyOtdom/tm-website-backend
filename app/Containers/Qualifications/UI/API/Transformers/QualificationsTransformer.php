<?php

namespace App\Containers\Qualifications\UI\API\Transformers;

use App\Containers\Qualifications\Models\Qualifications;
use App\Ship\Parents\Transformers\Transformer;

class QualificationsTransformer extends Transformer
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
     * @param Qualifications $entity
     *
     * @return array
     */
    public function transform(Qualifications $entity)
    {
        $response = [
            'object' => 'Qualifications',
            'id' => $entity->getHashedKey(),
            'qualification' => $entity->qualification,
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
