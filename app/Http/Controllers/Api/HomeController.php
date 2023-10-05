<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Customer;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        // $request->q;
        $customers = Customer::where('user_id', authUser('sanctum')->id)
            ->where('name', 'Like', '%' . $request->q . '%')
            ->get();

        $certificates =  Certificate::where('user_id', authUser('sanctum')->id)
            ->where('id', 'Like', '%' . $request->q . '%')
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->latest()
            ->get();
        $data = [
            'customers' => $customers,
            'certificates' => $certificates,
        ];

        return responseJson(true, 'search result', $data);
    }

    /**
     *
     *
     *
     *
     */

    public function getTrialDetails(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        $subscription = $user->subscription('default');

        if ($user->subscribed('default') && (!$user->subscription('default')->ended() || !$user->subscription('default')->canceled())) {
            $free_plan_id = config('services.stripe.Free_Plan');
            if ($user->subscribedToPrice($free_plan_id, 'default')) {

                $trialEnd = $subscription->trial_ends_at;
                $remainingDays = max(0,Carbon::now()->diffInDays($trialEnd->endOfDay(), false));
                //$remainingCertificates = $subscription->quantity - $user->certificate()->count();
                $remainingCertificates = 20 - $user->certificate()->count();
                $remainingTrialDays = max(0, Carbon::now()->diffInDays($trialEnd, false));

                $data = [
                    'remaining_days' => $remainingDays,
                    'remaining_certificates' => $remainingCertificates,
                    '$remainingTrialDays' =>$remainingTrialDays,
                ];
                return responseJson(true, 'Trial details data', $data);
            } else {
                $stripeSubscription = $subscription->asStripeSubscription();
                /* ********* */
                $current_period_end = $stripeSubscription->current_period_end;
                $end_at = Carbon::createFromTimestamp($current_period_end);
                $remainingDays = max(0,Carbon::now()->diffInDays($end_at, false));
                /* ******** */
                $remainingCertificates = 'Unlimited';
                /* ***** */
                $trialEnd = $subscription->trial_ends_at;
                $remainingTrialDays = max(0,Carbon::now()->diffInDays($trialEnd, false));

                $data = [
                    'remaining_days' => $remainingDays,
                    'remaining_trial_days' => $remainingTrialDays,
                    'remaining_certificates' => $remainingCertificates,
                ];
                return responseJson(true, 'User has subscription', $data);
            }
        } else {
            $data = [
                'remaining_days' => 0,
                'remaining_certificates' => 0,
               ' remainingTrialDays'=>0,

            ];
            return responseJson(false, 'User is not subscribed to a plan', $data);
        }
    }
    public function closeApp(Request $request){
        $user = Auth::guard('sanctum')->user();
        $key = config('services.stripe.Secret_key');
        \Stripe\Stripe::setApiKey($key);
        $session = \Stripe\BillingPortal\Session::create([
            'customer' => $user->stripe_id,
        ]);
        $customer_portal_link =  $session->url;
        $subscription = $user->subscription('default');
        if ( !$user->subscription('default') || $user->subscription('default')->ended() || $user->subscription('default')->canceled() || !$user->subscribedToPrice($free_plan_id, 'default') || !$user->subscribed() || $user->subscription()->ended() ){
            return responsejson(true, 'plans', $customer_portal_link);

        }
}
}
