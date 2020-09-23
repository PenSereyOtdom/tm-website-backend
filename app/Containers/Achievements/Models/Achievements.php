<?php

namespace App\Containers\Achievements\Models;

use App\Ship\Parents\Models\Model;

class Achievements extends Model
{
    protected $table = 'achievements';
    protected $fillable = [
        'user_id', 'ach_title', 'ach_date', 'ach_detail'
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
    protected $resourceKey = 'achievements';
}
