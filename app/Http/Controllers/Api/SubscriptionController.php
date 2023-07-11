<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Cashier\Cashier;
use Stripe\StripeClient;

use App\Models\Plan;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use App\Models\SubscriptionItem;
use Stripe\PaymentMethod;
use App\Models\Subscription as LocalSubscription;

class SubscriptionController extends Controller
{
    public function retrievePlans()
    {
        $key = \config('services.stripe.Secret_key');
        $stripe = new StripeClient($key);
        $plansraw = $stripe->plans->all([
            "active" => true,

        ]);
        $plans = $plansraw->data;

        foreach ($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,
                []
            );
            $plan->product = $prod;
        }
        return $plans;
    }

    public function showPlans()
    {
        $data = Plan::with('features')->get();
        return responseJson(true, 'Planss details data', $data);
    }
    public function showIntervalPlans(){
     $monthlyPlans = Plan::where('interval', 'monthly')->where('name', '!=', 'free')->with('features')->get();
    $yearlyPlans = Plan::where('interval', 'yearly')->with('features')->get();

    $data = [
        'monthly_plans' => $monthlyPlans,
        'yearly_plans' => $yearlyPlans,
    ];

    return responseJson(true, 'Plans details data', $data);
    }



    public function createToken(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.Publishable_key'));

        try {
            $user = Auth::guard('sanctum')->user();
            $paymentMethod = PaymentMethod::create([
                'type' => 'card',
                'card' => [
                    'number' => $request->input('card_number'),
                    'exp_month' => $request->input('card_exp_month'),
                    'exp_year' => $request->input('card_exp_year'),
                    'cvc' => $request->input('card_cvc'),
                ],
                'billing_details' => [
                    'name' => $request->input('card_name'),
                    'email' => $request->input('email'),
                    'address' => [
                        'country' => $request->input('country'),
                    ],
                ],

            ]);
            //  $user->createOrGetStripeCustomer();
            //  $user->addPaymentMethod($paymentMethod->id);

        return [
            'message' => 'Payment method created and saved successfully',
            'token' => $paymentMethod->id,
        ];
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 400);
        }
    }
   
    public function createCustomer(Request $request)
    {
    Stripe::setApiKey(config('services.stripe.Secret_key'));
    $user= Auth::guard('sanctum')->user();
    $stripeCustomer=$user->createAsStripeCustomer([]);
    $stripeCustomerId = $stripeCustomer->stripe_id;
    $user->stripe_id = $stripeCustomerId;
    $user->save();
    return response()->json(['message' => 'Customer created successfully',
                             'customerId'=>$stripeCustomerId,
                          ]);
        
    }
    public function cancel(Request $request,$plan)
 {
    $user = Auth::guard('sanctum')->user();
    $plan = Plan::findOrFail($plan);
    if ($user->subscribed($plan->stripe_plan)) {
        $subscription = $user->subscription($plan->stripe_plan);
        $subscription->cancel();
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription canceled successfully.',
        'next_toute'=>route('plans'),
     ]);
    } else {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are not subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
       
    }
}
public function changeSubscription(Request $request)
{
    $user = Auth::user();
    $newPlan = Plan::findOrFail($request->plan);
    if ($user->subscribed($newPlan->stripe_plan)) {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are already subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
    }
    $user->subscription($user->subscription()->name)
        ->swap($newPlan->stripe_plan);
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription changed successfully.',
        'next_toute'=>route('plans'),
     ]);
}
public function resume(Request $request,$plan)
{
    $user = Auth::user();
    $plan = Plan::findOrFail($plan);
    
    if ($user->subscribed($plan->stripe_plan)) {
        $subscription = $user->subscription($plan->stripe_plan);
        $subscription->resume();
        return response()->json([
            'status'=>'success',
            'message' => 'Subscription canceled successfully.',
        'next_toute'=>route('plans'),
     ]);
    } else {
        return response()->json([
            'status'=>'fail',
            'message' => 'You are not subscribed to this plan.',
        'next_toute'=>route('plans'),
     ]);
    }
}
public function processSubscription(Request $request)
    {
       $user = Auth::guard('sanctum')->user();
        $pay=$this->createToken($request);
       $paymentMethod = ($pay['token']);
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = Plan::find($request->plan);
         $subscription= $user->newSubscription($plan->name,$plan->stripe_plan)
            ->create($paymentMethod, [
           'email' => $user->email,
           'collection_method' => 'charge_automatically',
           'items' => [
               [
                 'price' => $plan->stripe_plan,
                   'quantity' => 1,
               ],
           ],
           
       ]);
       return response()->json([
        'message'=>'you are subscription successfuly',
        'subscription'=>$subscription,
        'next_route'=>route('plans'),
       ]);
    
        }

public function cancelSub(Request $request, $subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $subscription = Subscription::retrieve($subscriptionId);

        if ($subscription->cancel_at_period_end) {
            return response()->json([
                'message' => 'Subscription is already scheduled for cancellation.',
            ], 400);
        }

        $subscription->cancel(['cancel_at_period_end' => true]);

        return response()->json([
            'message' => 'Subscription has been canceled and will end at the next billing cycle.',
        ]);
    }
    public function resumeSub(Request $request, $subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $subscription = Subscription::retrieve($subscriptionId);

        if (!$subscription->cancel_at_period_end) {
            return response()->json([
                'message' => 'Subscription is not canceled or already resumed.',
            ], 400);
        }

        $subscription->cancel_at_period_end = false;
        $subscription->save();

        return response()->json([
            'message' => 'Subscription has been resumed.',
        ]);
    }



    
    
    
    }


    
