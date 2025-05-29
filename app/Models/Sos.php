<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sos extends Model
{
    protected $fillable = [
        'alert_id', // if related
        'status', // pending, acknowledged, resolved        
    ];
}
