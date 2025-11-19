<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Helper\JWTToken;
use Closure;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token');
        
        $result = JWTToken::VerifyToken($token);
        if($result =="unauthorized"){
            return redirect('/adminpanel');           
        }  
        else{
            $request->headers->set('email',$result->userEmail);
            $request->headers->set('id',$result->userID);
            $request->headers->set('role',$result->role);
            return $next($request);
        }
    }
}
