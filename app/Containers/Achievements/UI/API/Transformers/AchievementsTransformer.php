<?php

namespace App\Containers\Achievements\UI\API\Transformers;

use App\Containers\Achievements\Models\Achievements;
use App\Ship\Parents\Transformers\Transformer;

class AchievementsTransformer extends Transformer
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
     * @param Achievements $entity
     *
     * @return array
     */
    public function transform(Achievements $entity)
    {
        $response = [
            'object' => 'Achievements',
            'id' => $entity->getHashedKey(),
            'ach_title'=> $entity->ach_title,
            'ach_date'=> $entity->ach_date,
            'ach_detail'=> $entity->ach_detail,
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
