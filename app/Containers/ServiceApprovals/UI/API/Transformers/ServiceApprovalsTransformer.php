<?php

namespace App\Containers\ServiceApprovals\UI\API\Transformers;

use App\Containers\ServiceApprovals\Models\ServiceApprovals;
use App\Ship\Parents\Transformers\Transformer;

class ServiceApprovalsTransformer extends Transformer
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
     * @param ServiceApprovals $entity
     *
     * @return array
     */
    public function transform(ServiceApprovals $entity)
    {
        $response = [
            'object' => 'ServiceApprovals',
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
