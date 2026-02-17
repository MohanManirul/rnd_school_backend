<?php

namespace App\Http\Controllers\API;

use App\Helper\JWTToken;
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
    public function UserLogin(Request $request):JsonResponse
        {
            try{
                $UserEmail  = $request->UserEmail;
                $OTP        = rand (100000,999999);
                $details    = ['code' => $OTP];
                Mail::to($UserEmail)->send(new OTPMail($details));
                User::updateOrCreate(['email' => $UserEmail], ['email'=>$UserEmail,'otp'=>$OTP]);

                return $this->success("A 6 Digit OTP {$OTP} has been sent to your email address",200);
            }catch(\Throwable $e){
                return $this->error('Something went Wrong',500,$e );
            }
            
        }

    public function VerifyLogin(Request $request)
    {
        
        try{
            $UserEmail  = $request->UserEmail;
            $OTP        = $request->OTP;
            $user       = User::where('email',$UserEmail)->where('otp',$OTP)->first();
            if(!$user) {
                return $this->error('Invalid credentials', 401);
            }else{
                User::where('email',$UserEmail)->where('otp',$OTP)->update(['otp'=>'0']);
                $token=JWTToken::CreateToken($UserEmail,$user->id);
                return $this->success([
                        'user' => new UserResource($user),
                        'token' => $token
                    ], 200)->cookie(
                            'token',
                            $token,         // value
                            60*24*30,       // minutes (30 days)
                            '/',            // path
                            null,           // domain (null is fine)
                            false,          // secure (HTTPS হলে true)
                            true,           // httpOnly (JS access চাইলে false)
                            false,          // raw
                            'None'          // sameSite 
                        );

            }
            
            }catch(\Throwable $e){
                return $this->error('Something went Wrong',500,$e );
        }
    }

    //logout
    public function UserLogout(){
        
         return redirect('/');
    }

    public function checkAuth(Request $request)
    {
        $token = $request->cookie('token');

        if (!$token) {
            return response()->json(['auth' => false], 401);
        }

        $user = JWTToken::VerifyToken($token);

        if (!$user) {
            return response()->json(['auth' => false], 401);
        }

        return response()->json([
            'auth' => true,
            'user' => $user
        ]);
    }

}
