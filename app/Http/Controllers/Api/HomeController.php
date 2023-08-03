<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Carbon\Carbon;

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
        $subscription = $user->subscribed('default');

        if ($subscription) {
            $free_plan_id = config('services.stripe.Free_Plan');
            if ($user->subscribedToPrice($free_plan_id, 'default')) {

                $trialEnd = $subscription->trial_ends_at;
                $remainingDays = Carbon::now()->diffInDays($trialEnd->endOfDay(), false);
                //$remainingCertificates = $subscription->quantity - $user->certificate()->count();
                $remainingCertificates = 20 - $user->certificate()->count();

                $data = [
                    'remaining_days' => $remainingDays,
                    'remaining_certificates' => $remainingCertificates,
                ];
                return responseJson(true, 'Trial details data', $data);
            } else {
                 $stripeSubscription = $subscription->asStripeSubscription();
                /* ********* */
                $current_period_end = $stripeSubscription->current_period_end;
                $end_at = Carbon::createFromTimestamp($current_period_end);
                $remainingDays = Carbon::now()->diffInDays($end_at, false);
                /* ******** */
                $remainingCertificates = 'Unlimited';
                /* ***** */
                $trialEnd = $subscription->trial_ends_at;
                $remainingTrialDays = Carbon::now()->diffInDays($trialEnd, false);

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

            ];
            return responseJson(true, 'User is not subscribed to a plan', $data);

        }
    }
}
