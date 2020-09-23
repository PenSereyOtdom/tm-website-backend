<?php

namespace App\Containers\ServiceApprovals\Models;

use App\Ship\Parents\Models\Model;

class ServiceApprovals extends Model
{
    protected $fillable = [

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
    protected $resourceKey = 'serviceapprovals';
}
