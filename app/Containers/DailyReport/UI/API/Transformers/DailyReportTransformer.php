<?php

namespace App\Containers\DailyReport\UI\API\Transformers;

use App\Containers\DailyReport\Models\DailyReport;
use App\Containers\JobPost\UI\API\Transformers\JobPostTransformer;
use App\Ship\Parents\Transformers\Transformer;

class DailyReportTransformer extends Transformer
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
     * @param DailyReport $entity
     *
     * @return array
     */
    public function transform(DailyReport $entity)
    {
        $response = [
            'object' => 'DailyReport',
            'id' => $entity->id,
            'applies_id' => $entity->applies_id,
            'title' => $entity->title,
            'description' => $entity->description,
            'hour_spent' => $entity->hour_spent,
            'date' => $entity->date,
            'status' => $entity->status,
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