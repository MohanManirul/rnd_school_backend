<?php

namespace App\Http\Controllers\API;

use App\Helper\ResponseHelper;
use App\Http\Controllers\API\Base\BaseApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Resources\User\UserResource;
use App\Models\CustomerProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class ProfileController extends BaseApiController
{
    public function ReadProfile(Request $request)
        {
           
            $user_id=$request->header('id');
            $data=CustomerProfile::where('user_id',$user_id)->with('user')->first();
            return ResponseHelper::Out('success',$data,200);
            
        }

     public function CreateProfile(Request $request)
    {
        $user_id=$request->header('id');
        $request->merge(['user_id' =>$user_id]);
        $data= CustomerProfile::updateOrCreate(
            ['user_id' => $user_id],
            $request->input()
        );
        return ResponseHelper::Out('success',$data,200);
    }
    
    
    public function logout(Request $request)
    {
        $user = $request->user();
        $cacheKey = "user_profile_{$user->id}";
        Cache::forget($cacheKey);
        $request->user()->currentAccessToken()->delete();
        return $this->success(null, 'Logout successful');
    }
    
}
