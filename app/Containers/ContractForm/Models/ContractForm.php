<?php

namespace App\Containers\ContractForm\Models;

use App\Ship\Parents\Models\Model;

class ContractForm extends Model
{
    protected $table = 'contractforms';
    protected $fillable = [
        'applied_id', 'overview','management_of_person_info','purpose_of_use','prohibition','personal_info',
        'inquiry', 'compliance','contact_us','status_agree',

    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'contractforms';
}
