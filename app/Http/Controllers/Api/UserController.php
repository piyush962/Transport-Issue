<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function sendOtp(Request $request){
        $role = $request->role;
        $mobile = $request->mobile;

        $user = User::where('mobile_number', $mobile)
                    ->where('role', $role)
                    ->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User with provided mobile and role not found.',
            ], 404);
        }

        $otp = rand(100000, 999999);
        // $expireTime = Carbon::now('Asia/Kolkata')->addMinutes(5);
        $expireTime = Carbon::now('Asia/Kolkata')->addDays(365);
        $user->update([
            'otp' => '123456',
            'otp_expired_time' => $expireTime,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'OTP generated successfully.',
            'data' => [
                'otp' => '123456',
                'role' => $role,
                'expires_at' => $expireTime->toDateTimeString(),
            ]
        ], 200);
    }

    public function verifyOtp(Request $request){
        if ($request->isMethod('post')) {
            $mobile = $request->mobile;
            $otp = $request->otp;

            $user = User::where('mobile_number', $mobile)->first();

            if ($user) {
                $token = $user->createToken('transport-app')->plainTextToken;
                // Check if OTP matches
                if ($otp == $user->otp) {
                    // Check if OTP is expired
                    if (Carbon::now('Asia/Kolkata')->lessThanOrEqualTo($user->otp_expired_time)) {
                        return response()->json([
                            'status' => true,
                            'code' => 200,
                            'data' => [
                                'mobile' => $mobile,
                                'otp' => '123456',   //$otp
                                'token' => $token,   
                                'data' => $user, // Return user data                       
                            ],
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
                $token = $user->createToken('transport-app')->plainTextToken;
                if ($otp == $user->otp) {
                    if (Carbon::now('Asia/Kolkata')->lessThanOrEqualTo($user->otp_expired_time)) {
                        return response()->json([
                            'status' => true,
                            'code' => 200,
                             'data' => [
                                'mobile' => $mobile,
                                'token' => $token,                                
                            ],
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
        if(!empty($request->current_password)){

            if (!Hash::check($request->current_password, $user->password)) {
                return response()->json([
                    'status' => false,
                    'code' => 401,
                    'message' => 'Old password is incorrect.'
                ], 401);
            }
        }else{
            return response()->json([
            'status'=>false,
            'code'=> 400,
            'message'=>'Current password is required.'
            ],400);
        }
        if(!empty($request->current_password)){
        
            if (Hash::check($request->new_password, $user->password)) {
                return response()->json([
                    'status' => false,
                    'code' => 400,
                    'message' => 'New password cannot be the same as the old password.'
                ], 400);
            }
        }else{
            return response()->json([
            'status'=>false,
            'code'=> 400,
            'message'=>'new password is required.'
            ],400);
        }


        // Step 5: Update password
        $user->password = Hash::make($request->new_password);
        if($user->save()){
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Password has been reset successfully.'
            ], 200);
        } else{
            return response()->json([
            'status'=>false,
            'code'=> 400,
            'message'=>'Failed to reset password, please try again.'
            ],400);
        }       
    }

    public function getUser(Request $request){
        $user = User::with('userDetail')->where('id', $request->user()->id)->first();
        if($user){
            return response()->json([
                'status' => true,
                'code' => 200,
                'data' => $user,
                'message' => 'User data retrieved successfully.'
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'code' => 404,
                'data' => null,
                'message' => 'User not found.'
            ], 404);
        }
    }

    public function updateUser(Request $request){
        $user = $request->user();  

        // Update User table
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Update or create userDetail
        $userDetail = $user->userDetail ?? new UserDetail();
        $userDetail->user_id = $user->id;
        $userDetail->address = $request->address;
        $userDetail->driving_license_number = $request->driving_license_number;

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = 'profile_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('user_documents/profile'), $filename);
            // $file->storeAs('public/user_documents', $filename);
            $userDetail->profile_picture = $filename;
        }

        $userDetail->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'User details updated successfully.',
            'data' => User::with('userDetail')->find($user->id),
        ]);
    }

    public function driverListing(Request $request){
        $drivers = User::with('userDetail')
            ->where('role', 'driver')
            ->where('status', 'active')
            ->get();

        if($drivers->isEmpty()){
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'No active drivers found.',
                'data' => []
            ], 404);
        }

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Active drivers retrieved successfully.',
            'data' => $drivers
        ], 200);
    }
    public function addDriver(Request $request,$id=null){
        
    }
    public function supportTeamListing(Request $request){
        $drivers = User::with('userDetail')
            ->where('role', 'support')
            ->where('status', 'active')
            ->get();

        if($drivers->isEmpty()){
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'No active drivers found.',
                'data' => []
            ], 404);
        }

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Active support team retrieved successfully.',
            'data' => $drivers
        ], 200);
    }
}
