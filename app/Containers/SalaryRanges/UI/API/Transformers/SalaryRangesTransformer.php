<?php

namespace App\Containers\SalaryRanges\UI\API\Transformers;

use App\Containers\SalaryRanges\Models\SalaryRanges;
use App\Ship\Parents\Transformers\Transformer;

class SalaryRangesTransformer extends Transformer
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
     * @param SalaryRanges $entity
     *
     * @return array
     */
    public function transform(SalaryRanges $entity)
    {
        $response = [
            'object' => 'SalaryRanges',
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
