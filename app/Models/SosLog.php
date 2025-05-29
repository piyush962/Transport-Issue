<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SosLog extends Model
{
    protected $fillable = [
        'sos_id',
        'user_id',
        'action',
        'remarks'
    ];
}
