<?php

namespace App\Containers\SetInterview\UI\API\Transformers;

use App\Containers\SetInterview\Models\SetInterview;
use App\Ship\Parents\Transformers\Transformer;

class SetInterviewTransformer extends Transformer
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
     * @param SetInterview $entity
     *
     * @return array
     */
    public function transform(SetInterview $entity)
    {
        $response = [
            'object' => 'SetInterview',
            'id' => $entity->id,
            'status'=> $entity->status,
            'pick_date'=> $entity->pick_date,
            'start_time'=> $entity->start_time,
            'end_time'=> $entity->end_time,
            'meeting_url'=> $entity->meeting_url,
            'note'=> $entity->note,
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
