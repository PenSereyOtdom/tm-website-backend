<?php

namespace App\Containers\JobTypes\Models;

use App\Ship\Parents\Models\Model;

class JobTypes extends Model
{
    protected $table = 'jobtypes';

    protected $fillable = [
        'user_id','job_type'
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
    protected $resourceKey = 'jobtypes';
}
