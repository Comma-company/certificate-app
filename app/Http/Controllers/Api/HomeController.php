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
        $subscription = $user->subscription('free');

        if ($subscription) {
            $trialEnd = $subscription->trial_ends_at;
            $remainingDays = Carbon::now()->diffInDays($trialEnd->endOfDay(), false);
            $remainingCertificates = $subscription->quantity - $user->certificate()->count();

            $data = [
                'remaining_days' => $remainingDays,
                'remaining_certificates' => $remainingCertificates,
            ];
            return responseJson(true, 'Trial details data', $data);
        } else {
            $remainingDays = 0;
            $remainingCertificates = 0;
            $extra = [
                'remaining_days' => $remainingDays,
                'remaining_certificates' => $remainingCertificates,

            ];

            return responseJson(true, 'User is not subscribed to a plan', $extra);
        }
    }
}
