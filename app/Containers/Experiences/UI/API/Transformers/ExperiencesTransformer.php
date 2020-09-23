<?php

namespace App\Containers\Experiences\UI\API\Transformers;

use App\Containers\Experiences\Models\Experiences;
use App\Ship\Parents\Transformers\Transformer;

class ExperiencesTransformer extends Transformer
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
     * @param Experiences $entity
     *
     * @return array
     */
    public function transform(Experiences $entity)
    {
        $response = [
            'object' => 'Experiences',
            'id' => $entity->getHashedKey(),
            'exp_workplace_name' => $entity->exp_workplace_name,
            'exp_title'=> $entity->exp_title,
            'exp_start_date'=> $entity->exp_start_date,
            'exp_end_date'=> $entity->exp_end_date,
            'exp_detail'=> $entity->exp_detail,
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
