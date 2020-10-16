<?php

namespace App\Containers\Invoices\UI\API\Transformers;

use App\Containers\Invoices\Models\Invoices;
use App\Ship\Parents\Transformers\Transformer;

class InvoicesTransformer extends Transformer
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
     * @param Invoices $entity
     *
     * @return array
     */
    public function transform(Invoices $entity)
    {
        $response = [
            'object' => 'Invoices',
            'id' => $entity->getHashedKey(),
            'number'=> $entity->number,
            'to'=> $entity->to,
            'project_title'=> $entity->project_title,
            'invoice_no'=> $entity->invoice_no,
            'phone'=> $entity->phone,
            'date'=> $entity->date,
            'start_date'=> $entity->start_date,
            'end_date'=> $entity->end_date,
            'total_hours'=> $entity->total_hours,
            'terms_and_conditions'=> $entity->terms_and_conditions,
            'total_earn'=> $entity->total_earn,
            'fee'=> $entity->fee,
            'tax'=> $entity->tax,
            'grand_total'=> $entity->grand_total,
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
