<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class IssueMedia extends Model
{
    protected $fillable = [
        'issue_id',
        'media_type', // e.g., 'image', 'video'
        'media_path',  // URL or path to the media file        
    ];
    public function issueMediaUrl(): Attribute
    {
        return Attribute::make(
            get: function (){
                if(!empty($this->media_path) && asset('issue_media/'.$this->media_path)){
                    return asset('issue_media/'.$this->media_path);
                }
            }
        );
    }

    protected $appends = [
        'issue_media_url',
    ];
   
}
