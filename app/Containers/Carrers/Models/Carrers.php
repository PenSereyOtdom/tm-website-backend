<?php

namespace App\Containers\Carrers\Models;

use App\Ship\Parents\Models\Model;

class Carrers extends Model
{
    protected $table = 'carrers';
    protected $fillable = [
        'user_id','title', 'content','path'
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
    protected $resourceKey = 'carrers';
}
