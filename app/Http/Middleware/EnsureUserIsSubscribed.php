<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

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
        // if (!$user->subscribed('free')) {
        //     $planId='price_1NSEkhE2sCQWSLCAGK6joBPt';
        //     $trialDays = 7;
        //     $limitedCertificateCount = 20;
        //     $user->createOrGetStripeCustomer(); // Create Stripe customer
        //         $subscription = $user->newSubscription('free', $planId)->trialDays($trialDays)
        //         ->quantity($limitedCertificateCount)
        //         ->create();
        // }

        $free_plan_id = config('services.stripe.Free_Plan');

        if ($user && (($user->subscribedToPrice($free_plan_id, 'default') && !$user->subscription('default')->onTrial()) || $user->certificate()->count() > $max_certificate)) {
            if (!$user->subscribed()) {
                return responseJson(false, 'Please subscribe to access this feature.', [], 422);
            } else if ($user->subscription('default')->ended()) {
                return responseJson(false, 'Please subscribe to access this feature.', [], 422);
            } elseif ($user->subscription('default')->onGracePeriod()) {
                return $next($request);
            } else {
                return $next($request);
            }
        }
        return $next($request);
    }
}
