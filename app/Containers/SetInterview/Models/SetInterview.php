<?php

namespace App\Containers\SetInterview\Models;

use App\Ship\Parents\Models\Model;

class SetInterview extends Model
{
    protected $table = 'setinterviews';
    protected $fillable = [
        'applies_id', 'status' , 'pick_date','start_time','end_time','meeting_url','note'
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
    protected $resourceKey = 'setinterviews';
}
