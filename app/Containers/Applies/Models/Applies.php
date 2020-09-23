<?php

namespace App\Containers\Applies\Models;

use App\Ship\Parents\Models\Model;

class Applies extends Model
{
    protected $table = 'applies';
    protected $fillable = [
        'user_id', 'confirmed','company_id','job_post_id'
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
    protected $resourceKey = 'applies';
}
