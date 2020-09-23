<?php

namespace App\Containers\Qualifications\Models;

use App\Ship\Parents\Models\Model;

class Qualifications extends Model
{
    protected $table = 'qualifications';

    protected $fillable = [
        'user_id','qualification'

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
    protected $resourceKey = 'qualifications';
}
