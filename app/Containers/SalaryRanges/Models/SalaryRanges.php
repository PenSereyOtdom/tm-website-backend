<?php

namespace App\Containers\SalaryRanges\Models;

use App\Ship\Parents\Models\Model;

class SalaryRanges extends Model
{
    protected $table = 'salaryranges';

    protected $fillable = [
        'user_id','salaryrange'
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
    protected $resourceKey = 'salaryranges';
}
