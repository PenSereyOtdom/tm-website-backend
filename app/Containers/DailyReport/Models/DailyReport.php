<?php

namespace App\Containers\DailyReport\Models;

use App\Ship\Parents\Models\Model;

class DailyReport extends Model
{
    protected $fillable = [
        'user_id','date','hour_spent','title','description','task_name'
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
    protected $resourceKey = 'dailyreports';
}
