<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\Base\BaseApiController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use App\Mail\OTPMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends BaseApiController
{
    public function UserLogin(Request $request)
        {
            try{
                $UserEmail  = $request->UserEmail;
                $OTP        = rand (100000,999999);
                $details    = ['code' => $OTP];
                Mail::to($UserEmail)->send(new OTPMail($details));
                User::updateOrCreate(['email' => $UserEmail], ['email'=>$UserEmail,'otp'=>$OTP]);

                return $this->success('A 6 Digit OTP $OTP has been send to your email address',200);
            }catch(\Throwable $e){
                return $this->error('Something went Wrong',500,$e );
            }
            
        }
}
