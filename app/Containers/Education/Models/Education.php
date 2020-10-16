<?php

namespace App\Containers\Education\Models;

use App\Ship\Parents\Models\Model;

class Education extends Model
{
    protected $table = 'education';
    
    protected $fillable = [
        'seeker_id','school_name', 'major', 'edu_start_date', 'edu_end_date','edu_detail','degree'
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
    protected $resourceKey = 'education';
}
