<?php

namespace App\Containers\ExperienceLevels\Models;

use App\Ship\Parents\Models\Model;

class ExperienceLevels extends Model
{
    protected $table = 'experiencelevels';
    protected $fillable = [
        'user_id','experience_level'
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
    protected $resourceKey = 'experiencelevels';
}
