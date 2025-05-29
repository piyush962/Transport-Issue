<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueCategory extends Model
{
    protected $fillable = [
        'category',
        'issue',
        'complexity',
        'language',
    ];

   
}
