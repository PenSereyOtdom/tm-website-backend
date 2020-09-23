<?php

namespace App\Containers\ContractForm\UI\API\Transformers;

use App\Containers\ContractForm\Models\ContractForm;
use App\Ship\Parents\Transformers\Transformer;

class ContractFormTransformer extends Transformer
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
     * @param ContractForm $entity
     *
     * @return array
     */
    public function transform(ContractForm $entity)
    {
        $response = [
            'object' => 'ContractForm',
            'id' => $entity->getHashedKey(),
            'overview'=> $entity->overview,
            'management_of_person_info'=> $entity->management_of_person_info,
            'purpose_of_use'=> $entity->purpose_of_use,
            'prohibition'=> $entity->prohibition,
            'personal_info'=> $entity->personal_info,
            'inquiry'=> $entity->inquiry,
            'compliance'=> $entity->compliance,
            'contact_us'=> $entity->contact_us,
            'status_agree'=> $entity->status_agree,
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
