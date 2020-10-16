<?php

namespace App\Containers\Experiences\Models;

use App\Ship\Parents\Models\Model;

class Experiences extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'seeker_id', 'exp_workplace_name','exp_title','exp_start_date','exp_end_date','exp_detail'
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
    protected $resourceKey = 'experiences';
}
