<?php

namespace App\Containers\JobClassifications\Models;

use App\Ship\Parents\Models\Model;

class JobClassifications extends Model
{
    protected $table = 'jobclassifications';
    
    protected $fillable = [
        'user_id','project_classification'
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
    protected $resourceKey = 'jobclassifications';
}
