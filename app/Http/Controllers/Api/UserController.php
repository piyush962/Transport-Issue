<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


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
        if ($request->isMethod('post')) {
            $mobile = $request->mobile;
            $otp = $request->otp;

            $user = User::where('mobile_number', $mobile)->first();

            if ($user) {
                // Check if OTP matches
                if ($otp == $user->otp) {
                    // Check if OTP is expired
                    if (Carbon::now('Asia/Kolkata')->lessThanOrEqualTo($user->otp_expired_time)) {
                        return response()->json([
                            'status' => true,
                            'code' => 200,
                            'data' => $request->only(['mobile', 'otp']),
                            'message' => 'You are successfully logged in.'
                        ], 200);
                    } else {
                        return response()->json([
                            'status' => false,
                            'code' => 410, // Gone (used for expired things)
                            'data' => null,
                            'message' => 'Your OTP has expired.'
                        ], 410);
                    }
                } else {
                    return response()->json([
                        'status' => false,
                        'code' => 401, // Unauthorized
                        'data' => null,
                        'message' => 'Invalid OTP. Please try again.'
                    ], 401);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'code' => 404,
                    'data' => null,
                    'message' => 'Mobile number not found!'
                ], 404);
            }
        }

        return response()->json([
            'status' => false,
            'code' => 405,
            'data' => null,
            'message' => 'Invalid request method.'
        ], 405);
    }

    public function sendForgotPasswordOtp(Request $request){
        // Validate input
       

        $mobile = $request->mobile;
        $user = User::where('mobile_number', $mobile)->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Mobile number not found in our records.'
            ], 404);
        }

        // Generate OTP and expiry (e.g., valid for 5 minutes)
        $otp = rand(100000, 999999);
        $expiry = Carbon::now('Asia/Kolkata')->addMinutes(5);

        // Update user record
        $user->otp = $otp;
        $user->otp_expired_time = $expiry;
        $user->save();

        // Here you would normally send the OTP via SMS

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'OTP sent successfully to your registered mobile number.',
            'data' => [
                'mobile' => $mobile,
                'otp' => $user->otp,
                'otp_expiry' => $expiry->toDateTimeString()
                // 'otp' => $otp // Optional: send only in dev/testing, remove in production
            ]
        ], 200);
    }

    public function sendForgotPasswordOtpVerify(Request $request){
        if ($request->isMethod('post')) {
            $mobile = $request->mobile;
            $otp = $request->otp;

            $user = User::where('mobile_number', $mobile)->first();

            if ($user) {
                if ($otp == $user->otp) {
                    if (Carbon::now('Asia/Kolkata')->lessThanOrEqualTo($user->otp_expired_time)) {
                        return response()->json([
                            'status' => true,
                            'code' => 200,
                            'data' => $request->only(['mobile']),
                            'message' => 'OTP verified successfully. You can now reset your password.'
                        ], 200);
                    } else {
                        return response()->json([
                            'status' => false,
                            'code' => 410,
                            'data' => null,
                            'message' => 'The OTP has expired. Please request a new one.'
                        ], 410);
                    }
                } else {
                    return response()->json([
                        'status' => false,
                        'code' => 401,
                        'data' => null,
                        'message' => 'The OTP you entered is incorrect. Please try again.'
                    ], 401);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'code' => 404,
                    'data' => null,
                    'message' => 'Mobile number not found in our records.'
                ], 404);
            }
        }

        return response()->json([
            'status' => false,
            'code' => 405,
            'data' => null,
            'message' => 'Invalid request method. Please use POST.'
        ], 405);
    }

    public function resetPassword(Request $request){
       

        // Step 2: Find user by mobile
        $user = User::where('mobile_number', $request->mobile)->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Mobile number not found.'
            ], 404);
        }

        // Step 3: Check if old password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'status' => false,
                'code' => 401,
                'message' => 'Old password is incorrect.'
            ], 401);
        }

        // Step 4: Check if new password is different from old
        if (Hash::check($request->new_password, $user->password)) {
            return response()->json([
                'status' => false,
                'code' => 400,
                'message' => 'New password cannot be the same as the old password.'
            ], 400);
        }

        // Step 5: Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Password has been reset successfully.'
        ], 200);
    }
}
