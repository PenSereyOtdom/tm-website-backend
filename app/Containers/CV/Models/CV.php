<?php

namespace App\Containers\CV\Models;

use App\Ship\Parents\Models\Model;

class CV extends Model
{
    protected $table = 'cvs';
    protected $fillable = [
        'user_id', 'full_name','email', 'phone_number', 'summary','gender','dob','skill'
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
    protected $resourceKey = 'cvs';
}
