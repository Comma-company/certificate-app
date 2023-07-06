<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificate;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        // $request->q;
       $customers = Customer::where('user_id', authUser('sanctum')->id)
        ->where('name', 'Like', '%' . $request->q . '%')
        ->get();

        $certificates =  Certificate::where('user_id' , authUser('sanctum')->id)
            ->where('id', 'Like', '%' . $request->q . '%')
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->latest()
            ->get();
        $data =[
            'customers' => $customers,
            'certificates' => $certificates,
        ];

        return responseJson(true, 'search result', $data);
    }
    public function getTrialDetails(Request $request)
{
    $user = Auth::guard('sanctum')->user();
     $trialEnd = $user->trial_ends_at;
    $remainingDays = now()->diffInDays($trialEnd, false);
     $certificateCount = $user->certificate()->count();
     $remainingCertificates = 20 - $certificateCount;
     $data=[
        'remaining_days' => $remainingDays,
        'remaining_certificates' => $remainingCertificates,
     ];
     return responseJson(true,'trial details data',$data);
    
}
}
