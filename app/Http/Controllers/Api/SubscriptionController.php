<?php

namespace App\Http\Controllers\Api;

use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use Stripe\Customer;
use Stripe\StripeClient;
use Stripe\Subscription;

use Stripe\PaymentMethod;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use Stripe\Plan as StripePlan;
use App\Models\SubscriptionItem;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription as LocalSubscription;

class SubscriptionController extends Controller
{
    public function retrievePlans()
    {
        $key = \config('services.stripe.Secret_key');
        $stripe = new StripeClient($key);
        $plansraw = $stripe->plans->all([
            'limit' => 15,
            'active' => true,
        ]);
        $plans = $plansraw->data;

        foreach ($plans as $plan) {
            $prod = $stripe->products->retrieve(
                $plan->product,
                []
            );
            $plan->product = $prod;
            $features = isset($prod->metadata['features']) ? explode(',', $prod->metadata['features']) : [];
            $plan->product->features = $features;
        }

        return $plans;
    }
    public function urlPlans()
    {
        $user = Auth::guard('sanctum')->user();

        $planApiUrl = URL::temporarySignedRoute(
            'plans',
            now()->addMinutes(60),
            [
                'CLIENT_REFERENCE_ID' => $user->id,
                'email_user' => $user->email ?? ''
            ]
        );

      /*   $planApiUrl = route('plans', [
            'CLIENT_REFERENCE_ID' => $user->id,
            'email_user' => $user->email ?? ''
        ]); */

        return responsejson(true, 'plans', $planApiUrl);
    }

    public function showPlans()
    {
        $data = $this->retrievePlans();
        return responseJson(true, 'Planss details data', $data);
    }

    public function showUserSubscription(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        Stripe::setApiKey(config('services.stripe.Secret_key'));
        try {
            $subscriptions = Subscription::all(['customer' => $user->stripe_id]);

            if ($subscriptions->count() > 0) {
                $subscription = $subscriptions->data[0];
                $stripeSubscription = Subscription::retrieve($subscription->id);
                $plan = StripePlan::retrieve($stripeSubscription->plan->id);
                $product = \Stripe\Product::retrieve($plan->product);
                $planPrice = $plan->amount / 100;
                $planFeatures = !empty($plan->metadata['features']) ? explode(',', $plan->metadata['features']) : [];
                $productFeatures = !empty($product->metadata['features']) ? explode(',', $product->metadata['features']) : [];
                $productPrice = $product->metadata['price'] ?? 0;
                $subscriptionDetails = [
                    'id' => $stripeSubscription->id,
                    'status' => $stripeSubscription->status,
                    'current_period_start' => $stripeSubscription->current_period_start,
                    'current_period_end' => $stripeSubscription->current_period_end,
                    'plan' => [
                        'id' => $plan->id,
                        'name' => $plan->name,
                        'price' => $planPrice,
                        'currency' => $plan->currency,
                        'features' => $planFeatures,
                    ],
                    'product' => [
                        'id' => $product->id,
                        'name' => $product->name,
                        'description' => $product->description,
                        'price' => $productPrice,
                        'features' => $productFeatures,

                    ],
                ];

                return responseJson(true, 'Subscription details retrieved successfully.', $subscriptionDetails);
            } else {
                return responseJson(false, 'You are not subscribed to any plan.');
            }
        } catch (\Exception $e) {
            return responseJson(false, 'Failed to retrieve subscription details: ' . $e->getMessage());
        }
    }
    public function showIntervalPlans()
    {
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
            'token' => $paymentMethod->id,
        ];
    }

    public function createCustomer(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.Secret_key'));
        $user = Auth::guard('sanctum')->user();
        $stripeCustomer = $user->createAsStripeCustomer([]);
        $stripeCustomerId = $stripeCustomer->stripe_id;
        $user->stripe_id = $stripeCustomerId;
        $user->save();
        return response()->json([
            'message' => 'Customer created successfully',
            'customerId' => $stripeCustomerId,
        ]);
    }
    public function cancel(Request $request, $subscriptionId)
    {
        $user = Auth::guard('sanctum')->user();
        Stripe::setApiKey(config('services.stripe.Secret_key'));
        try {
            $subscription = LocalSubscription::where('user_id', $user->id)->where('stripe_id', $subscriptionId)->first();
            if ($subscription) {
                $stripeSubscription = Subscription::retrieve($subscription->stripe_id);
                if ($stripeSubscription) {
                    $stripeSubscription->cancel();
                    return responseJson(true, 'Subscription canceled successfully.');
                } else {
                    return responseJson(false, 'Subscription not found.');
                }
            } else {
                return responseJson(false, 'You are not subscribed to this plan.');
            }
        } catch (\Exception $e) {
            return responseJson(false, 'Failed to cancel subscription: ' . $e->getMessage());
        }
    }
    public function changeSubscriptionPlan(Request $request, $subscriptionId, $newPlanId)
    {
        $user = Auth::guard('sanctum')->user();
        Stripe::setApiKey(config('services.stripe.Secret_key'));
        try {
            $subscription = LocalSubscription::where('user_id', $user->id)->where('stripe_id', $subscriptionId)->first();

            if ($subscription) {
                $stripeSubscription = Subscription::retrieve($subscription->stripe_id);

                if ($stripeSubscription) {
                    $newPlan = StripePlan::retrieve($newPlanId);
                    $prorationDate = time();
                    $prorationItems = [
                        [
                            'id' => $stripeSubscription->items->data[0]->id,
                            'price' => $newPlan->id,
                        ],
                    ];

                    $invoice = \Stripe\Invoice::upcoming([
                        'customer' => $user->stripe_id,
                        'subscription' => $subscription->stripe_id,
                        'subscription_items' => $prorationItems,
                        'subscription_proration_date' => $prorationDate,
                    ]);
                    $stripeSubscription->items->data[0]->plan = $newPlanId;
                    $stripeSubscription->refresh();
                    $stripeSubscription->save();

                    $paymentIntent = \Stripe\PaymentIntent::create([
                        'customer' => $user->stripe_id,
                        'amount' => $invoice->amount_due,
                        'currency' => $invoice->currency,
                    ]);

                    $subscription->stripe_price = $newPlanId;
                    $subscription->save();

                    return responseJson(true, 'Subscription plan changed successfully.');
                } else {
                    return responseJson(false, 'Subscription not found.');
                }
            } else {
                return responseJson(false, 'You are not subscribed to this plan.');
            }
        } catch (\Exception $e) {
            return responseJson(false, 'Failed to change subscription plan: ' . $e->getMessage());
        }
    }


    public function resume(Request $request, $plan)
    {
        $user = Auth::user();
        $plan = Plan::findOrFail($plan);

        if ($user->subscribed($plan->stripe_plan)) {
            $subscription = $user->subscription($plan->stripe_plan);
            $subscription->resume();
            return response()->json([
                'status' => 'success',
                'message' => 'Subscription canceled successfully.',
                'next_toute' => route('plans'),
            ]);
        } else {
            return response()->json([
                'status' => 'fail',
                'message' => 'You are not subscribed to this plan.',
                'next_toute' => route('plans'),
            ]);
        }
    }
    public function processSubscription(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        $pay = $this->createToken($request);
        $paymentMethod = ($pay['token']);
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = Plan::find($request->plan);
        $subscription = $user->newSubscription($plan->name, $plan->stripe_plan)
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
        return responseJson(true, 'subscription details', $subscription);
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
