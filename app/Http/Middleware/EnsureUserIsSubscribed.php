<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $max_certificate = 20;
        $user = Auth::guard('sanctum')->user();

        $free_plan_id = config('services.stripe.Free_Plan');

        if ($user && (($user->subscribedToPrice($free_plan_id, 'default') && $user->subscription('default')->onTrial()) && $user->certificate()->count() < $max_certificate)) {
            if (!$user->subscribed('default')) {
                return responseJson(false, 'Please subscribe to access this feature.', [], 422);
            } else {
                return $next($request);
            }
        } else if ($user && (($user->subscribedToPrice($free_plan_id, 'default') && $user->subscription('default')->onTrial()) && $user->certificate()->count() >= $max_certificate)) {
            return responseJson(false, 'Please subscribe to access this feature.', [], 422);
        } else if ($user && (($user->subscribedToPrice($free_plan_id, 'default') && !$user->subscription('default')->onTrial()) || $user->certificate()->count() >= $max_certificate)) {
            return responseJson(false, 'Please subscribe to access this feature.', [], 422);
        } else if ($user->subscribed('default') && ($user->subscription('default')->ended() || $user->subscription('default')->canceled())) {
            return responseJson(false, 'Please subscribe to access this feature.', [], 422);
        } elseif ($user->subscribed('default') && $user->subscription('default')->onGracePeriod()) {
            return $next($request);
        } else {
            return $next($request);
        }
        return $next($request);
    }
}
