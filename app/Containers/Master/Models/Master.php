<?php

namespace App\Containers\Master\Models;

use App\Ship\Parents\Models\Model;

class Master extends Model
{
    protected $table = 'masters';
    protected $fillable = [
        'user_id','title'
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
    protected $resourceKey = 'masters';
}
