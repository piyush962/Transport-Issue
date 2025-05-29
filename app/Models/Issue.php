<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Delivery;
use App\Models\User;
use App\Models\IssueCategory;
use App\Models\IssueMedia;

class Issue extends Model
{
    protected $fillable = [
        'delivery_id',
        'driver_id',
        'support_id',
        'type',
        'issue_category_id',
        'description',
        'status',
        'reported_at',
        'claimed_at',
        'resolved_at',
    ];

    public function delivery(){
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function driver(){
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function support(){
        return $this->belongsTo(User::class, 'support_id');
    }

    public function issueCategory()
    {
        return $this->belongsTo(IssueCategory::class, 'issue_category_id');
    }

    public function issueMedia()
    {
        return $this->hasMany(IssueMedia::class, 'issue_id');
    }

}
