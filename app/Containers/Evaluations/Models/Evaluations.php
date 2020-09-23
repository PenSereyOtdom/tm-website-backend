<?php

namespace App\Containers\Evaluations\Models;

use App\Ship\Parents\Models\Model;

class Evaluations extends Model
{
    protected $fillable = [
        'user_id','politeness','speed','knowledge','comment'
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
    protected $resourceKey = 'evaluations';
}
