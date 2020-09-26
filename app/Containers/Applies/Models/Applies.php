<?php

namespace App\Containers\Applies\Models;
use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Ship\Parents\Models\Model;

class Applies extends Model
{
    use AuthorizationTrait;
    protected $table = 'applies';
    protected $fillable = [
        'seeker_id','jobpost_id' ,'confirmed','company_id','jobpost_id','full_name','year_exp'
        ,'progress'
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
    protected $resourceKey = 'applies';
}
