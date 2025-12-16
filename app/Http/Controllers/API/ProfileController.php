<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\Base\BaseApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class ProfileController extends BaseApiController
{
    public function me(Request $request)
        {
           
            $user = $request->user();

            $cacheKey = "user_profile_{$user->id}" ;
            $cached = Cache::remember($cacheKey , now()->addHour(1),function() use($user){
                return new UserResource($user) ;
            }) ;

            if(Cache::has($cacheKey)){
                logger("profile loaded from cache: {$cacheKey}") ;
                return $this->success($cached, 'User profile retrieved successfully');
            }else{
                logger("profile cache miss , hitting DB: {$cacheKey}") ;
            }
            
        }

    public function profileUpdate(UpdateProfileRequest $request)
        {
            $user = Auth::user();
            $data = $request->validated();
            if (isset($data['password'])) {
                $data['password'] = bcrypt($data['password']);
            }

            $user->update($data);
            //update cache
            $cacheKey = "user_profile_{$user->id}";
            Cache::put($cacheKey, new UserResource($user), now()->addHour(1));
            return $this->success(new UserResource($user), 'Profile updated successfully');
    
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
