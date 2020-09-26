<?php

namespace App\Containers\Applies\UI\API\Transformers;

use App\Containers\Applies\Models\Applies;
use App\Ship\Parents\Transformers\Transformer;
use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;

class AppliesTransformer extends Transformer
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
     * @param Applies $entity
     *
     * @return array
     */
    public function transform(Applies $entity)
    {
        $response = [
            'object' => 'Applies',
            'id' => $entity->id,
            'full_name' => $entity->full_name,
            'year_exp' => $entity->year_exp,
            'confirmed'=> $entity->confirmed,
            'created_at' => $entity->created_at,
            'real_id'    => $entity->seeker_id,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
   
}
