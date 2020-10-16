<?php

namespace App\Containers\Invoices\Models;

use App\Ship\Parents\Models\Model;

class Invoices extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'applies_id','invoice_no','total_hours','total_earn','fee','tax','grand_total',
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
    protected $resourceKey = 'invoices';
}
