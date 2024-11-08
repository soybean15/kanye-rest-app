<?php

namespace App\Http\Middleware;

use App\Providers\AppServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\PersonalAccessToken;

class KanyeQuoteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->query('token');
        if (!$token) {

            return response()->json(['error' => 'Token is required'], 401);
        }

        $accessToken = PersonalAccessToken::where('name', AppServiceProvider::KANYE_API_TOKEN)
            ->where('token', $token)->whereNull('expires_at')->first();



        if (!$accessToken) {
            // If the token is not found or invalid, return an unauthorized response
            return response()->json(['error' => 'Invalid token'], 401);
        }

        return $next($request);
    }
}
