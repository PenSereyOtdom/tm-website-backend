<?php

namespace App\Containers\JobPost\Models;

use App\Ship\Parents\Models\Model;

class JobPost extends Model
{
    protected $table = 'jobposts';

    protected $fillable = [
        'user_id', 'project_title', 'project_classification',
        'project_opening_category', 'project_type', 'location', 'salary',
        'qualification','experience_level', 'language','project_priority', 'number_of_hiring',
        'closing_date','email','phone_number','description', 'requirement',
        'condition','status', 'save',
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
    protected $resourceKey = 'jobposts';
}
