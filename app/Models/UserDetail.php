<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserDetail extends Model
{
   protected $fillable = [
    'user_id',
    'address',
    'driving_license_number',
    'driving_license_doc', // File path
    'vehicle_type', // Truck, Van, etc
    'vehicle_number',
    'vehicle_photo', 
    'aadhar_doc', // File path
    'emergency_contact',
    'profile_picture', // File path     
   ];

    public function profilePhotoUrl(): Attribute{
        return Attribute::make(
            get: function () {
                if (!empty($this->profile_picture) && asset('user_documents/profile/' . $this->profile_picture)) {
                    return asset('user_documents/profile/' . $this->profile_picture);
                }

                $name = trim(collect(explode(' ', $this->user->name))->map(function ($segment) {
                    return mb_substr($segment, 0, 5);
                })->join(' '));

                return 'https://ui-avatars.com/api/?name=' . urlencode($name) . '&color=B8EA3F&background=000000&size=128';
            }
        );
    }

    public function drivingLicenseDocUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!empty($this->driving_license_doc) and asset('user_documents/document/' . $this->driving_license_doc)) {
                    return asset('user_documents/document/' . $this->driving_license_doc);
                }
                
                return null;
            }
        );
    }

    public function vehiclePhotoUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!empty($this->vehicle_photo) and asset('user_documents/vehicle/' . $this->vehicle_photo)) {
                    return asset('user_documents/vehicle/' . $this->vehicle_photo);
                }
                
                return null;
            }
        );
    }
    
    public function aadharDocUrl(): Attribute
    {
        return Attribute::make(
            get: function () {
                if (!empty($this->aadhar_doc) and Storage::exists('user_documents/uid/' . $this->aadhar_doc)) {
                    return asset('user_documents/uid/' . $this->aadhar_doc);
                }                
                return null;
            }
        );
    }

    protected $appends = [
        'profile_photo_url',
        'driving_license_doc_url',
        'vehicle_photo_url',   
        'aadhar_doc_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
