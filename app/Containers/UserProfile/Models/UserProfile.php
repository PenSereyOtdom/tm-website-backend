<?php

namespace App\Containers\UserProfile\Models;

use App\Ship\Parents\Models\Model;

class UserProfile extends Model
{
    protected $table = 'userprofiles';
    protected $fillable = [
        'user_id','full_name','email','major','gender','contact','address','facebook_link','twitter_link','guthub_link','linkedin_link','website_link'
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
    protected $resourceKey = 'userprofiles';
}
