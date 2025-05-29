<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosAlert extends Model
{
  protected $fillable = [
    'driver_id',
    'delivery_id',
    'reason',
    'notes',
    'location',
    'acknowledged',
    'acknowledged_by',
    'alerted_at',
    'acknowledged_at',
  ];
}
