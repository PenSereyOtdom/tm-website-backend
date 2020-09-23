<?php

namespace App\Containers\BusinessIndustries\Models;

use App\Ship\Parents\Models\Model;

class BusinessIndustries extends Model
{
    protected $table = 'businessindustries';
    protected $fillable = [
        'user_id','business_industry'
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
    protected $resourceKey = 'businessindustries';
}
