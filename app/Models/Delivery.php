<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'driver_id',
        'assigned_by',
        'delivery_code',
        'pickup_location',
        'drop_location',
        'estimated_delivery_time',
        'delivery_type',
        'delivered_time',
        'delay_time',
        'delay_reason',
        'start_time',
        'end_time',
        'status',
        'remarks',
    ];
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
    public function assignedBy()
    {
        return $this->belongsTo(User::class, 'assigned_by');
    }
}
