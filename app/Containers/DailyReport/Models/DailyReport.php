<?php

namespace App\Containers\DailyReport\Models;

use App\Ship\Parents\Models\Model;

class DailyReport extends Model
{
    protected $table = 'dailyreports';
    protected $fillable = [
        'applies_id','date','hour_spent','title','description','status'
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
