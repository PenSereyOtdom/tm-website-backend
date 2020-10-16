<?php

namespace App\Containers\Applies\Models;
use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Containers\DailyReport\Models\DailyReport;
use App\Containers\JobPost\Models\JobPost;
use App\Containers\UserProfile\Models\UserProfile;
use App\Ship\Parents\Models\Model;
use App\Containers\User\Models\User;
use App\Containers\ContractForm\Models\ContractForm;
use App\Containers\SetInterview\Models\SetInterview;
class Applies extends Model
{
    protected $table = 'applies';
    protected $fillable = [
        'seeker_id','company_id','jobpost_id' ,'confirmed'
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

    public function contract()
    {
        return $this->hasMany(ContractForm::class);
    }
    public function userprofile()
    {
        return $this->hasMany(UserProfile::class, 'user_id', 'seeker_id');
    }
    public function jobpost(){
        return $this->hasMany(JobPost::class,'id','jobpost_id');
    }
    public function dailyreport(){
        return $this->hasMany(DailyReport::class, 'user_id','seeker_id');
    }

    public function interview(){
        return $this->hasMany(SetInterview::class);
    }

}