<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function sendOtp(Request $request)
    {
        if ($request->isMethod('post')) {
            $mobile = $request->mobile;

            $userExists = User::where('mobile_number', $mobile)->first();

            if ($userExists) {
                $otp = rand(100000, 999999);
                $expireTime = Carbon::now('Asia/Kolkata')->addMinutes(5);
                $userExists->update(['otp'=> $otp , 'otp_expired_time'=>$expireTime]);
                return response()->json([
                    'status' => true,
                    'otp' => $otp,
                    'expires_at' => $expireTime->toDateTimeString(),
                    'message' => 'OTP generated successfully'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'data' => null,
                    'message' => 'Mobile number not found!'
                ]);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Only POST method allowed'
        ], 405);
    }

    public function verifyOtp(Request $request){

    }
}
