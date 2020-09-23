<?php

namespace App\Containers\BusinessIndustries\UI\API\Transformers;

use App\Containers\BusinessIndustries\Models\BusinessIndustries;
use App\Ship\Parents\Transformers\Transformer;

class BusinessIndustriesTransformer extends Transformer
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
     * @param BusinessIndustries $entity
     *
     * @return array
     */
    public function transform(BusinessIndustries $entity)
    {
        $response = [
            'object' => 'BusinessIndustries',
            'id' => $entity->getHashedKey(),
            'business_industry'=> $entity->business_industry,
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
