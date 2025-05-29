<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'type',
        'notifiable',
        'data',
        'read_at'
    ];

    /**
     * Get the user that owns the notification.
     */
   
}
