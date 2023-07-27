<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialRemainingDaysNotification;
use App\Notifications\TrialEndNotification;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Customer;
use App\Models\Subscription;
use App\Models\SubscriptionItem;
use Stripe\PaymentMethod;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ChargeSucceededNotification;
use Illuminate\Support\Facades\Artisan;



class SubscriptionController extends Controller
{
    public function createSession(Request $request) {
        $YOUR_DOMAIN = 'http://localhost:8000'; // Replace this with your actual domain URL

        // Set your Stripe secret key
        Stripe::setApiKey(config('services.stripe.Secret_key'));
    
        try {
            $planId = $request->input('planId');
    
            // Create a Checkout Session using the Stripe API
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price' => $planId,
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'subscription',
                'success_url' => $YOUR_DOMAIN . '/success.html',
                'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
            ]);
    
            // Return the Checkout Session ID to the client-side
            return response()->json(['sessionId' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the Checkout Session.'], 500);
        }
       
    }
    public function plans(){
        $plans = Plan::whereNotIn('name', ['free'])->get();
        return view('plans',[
            'plans'=>$plans
        ]);
    }

    public function checkout($planId)
    {
       
        $plan=Plan::findOrFail($planId);
        $user=Auth::user();
         $currentPlan=$user->subscription($plan->stripe_plan)->stripe_plan ?? null;
        if(!is_null($currentPlan) && $currentPlan!=$plan->stripe_plan){
            $user->subscription($plan->stripe_plan)->swap($plan->stripe_plan);
            return redirect()->route('plans');
        }
         $intent = $user->createSetupIntent();
        return view('checkout', compact('plan', 'intent'));
    }

    public function processSubscription(Request $request)
    {
       $user = Auth::user();
      $paymentMethod = $request->input('token');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $plan = Plan::find($request->plan);
            $user->newSubscription($plan->name,$plan->stripe_plan)
            ->create($paymentMethod, [
           'email' => $user->email,
           'collection_method' => 'create_certificate',
           'days_until_due' => 10,
           'items' => [
               [
                   'quantity' => 1,
               ],
           ],
           'meta_data'=>[
            [
            'max_certificate'=>'20',
            ],
        ],
       ]);
       return redirect()->route('plans')->with('success','Success creating subscription !');
    
    
    
        }
    
    // public function retrievePlans()
    // {
    //     $key = config('services.stripe.Secret_key');
    //     $stripe = new StripeClient($key);
    //     $plansraw = $stripe->plans->all([
    //         "active" => true,

    //     ]);
    //     $plans = $plansraw->data;

    //     foreach ($plans as $plan) {
    //         $prod = $stripe->products->retrieve(
    //             $plan->product,
    //             []
    //         );
    //         $plan->product = $prod;
    //     }
    //     return $plans;
    // }
        public function showPlans(Request $request)
    {
       $user= Auth::guard('sanctum')->user();
       $CLIENT_REFERENCE_ID= $user->id;
        return view('plan', [
            'CLIENT_REFERENCE_ID'=>$CLIENT_REFERENCE_ID,
       
        ]);
        }
        public function resume(Request $request){
            $user=Auth::user();
            $user->subscription('default')->resume();
            return redirect()->route('plans');
        }
        public function updateSubscripe(Request $request){
                 $user=Auth::user();
           
                $paymentMethod = $request->input('token');
                $user->createOrGetStripeCustomer();
                $user->addPaymentMethod($paymentMethod);
                $plan = Plan::find($request->plan);
                $user->newSubscription($plan,$plan->stripe_plan)
                ->create($paymentMethod, [
               'email' => $user->email,
               'collection_method' => 'create_certificate',
               'days_until_due' => 10,
               'items' => [
                   [
                       'quantity' => 1,
                   ],
               ],
               'meta_data'=>[
                   [
                   'max_certificate'=>'infinite',
                   ],
               ],
           ]);
              
           return redirect()->route('plans')->with('success','Success creating subscription !');

           
        }
        public function handle(Request $request){
            $payload = @file_get_contents('php://input');
            $event = null;
            $data =[];

            try {
                $event = \Stripe\Event::constructFrom(
                 json_decode($payload, true)
                 );
            } catch(\UnexpectedValueException $e) {
           // Invalid payload
             echo '⚠️  Webhook error while parsing basic request.';
             http_response_code(400);
             exit();
            }
            Log::debug('Webhook subscription',[$event->type]);
            $user=Auth::guard('sanctum')->user();
            switch($event->type){
                case 'customer.subscription.updated':
                    $subscriptionId = $event->data->object->subscription;
                    $newTrialEndsAt = $event->data->object->trial_end;
                    $data= $this->updateSubscriptionTrialEndsAt($subscriptionId, $newTrialEndsAt);
                    break;
                case 'charge.succeeded':
                    $charge=$event->data->object;
                    $user = User::find($charge->user_id);
                     $chargeAmount = $charge->amount;
                     $user->notify(new ChargeSucceededNotification($chargeAmount));     
                    break;
                case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                 if ($paymentIntent->metadata->subscription_type === 'paid') {
                          $user = Auth::guard('sanctum')->user();
                        if ($user) {
                             $this->scheduleTransitionToPaidSubscription($user->id);
                            }
                    }
                  break;
                  case 'checkout.session.completed':
                    $session = $event->data->object;
                    $checkoutSessionId = $session->id;
                    $subscription = Subscription::where('stripe_id', $session->subscription)->first();
                    if ($subscription) {
                       
                    } else {
                       
                        Subscription::create([
                            'user_id' => $session->customer,
                            'name' => $session->metadata->plan_name, 
                            'stripe_id' => $session->subscription,
                            'stripe_status' => 'active', 
                            'stripe_price' => $session->metadata->plan_id, 
                            'quantity' => $session->metadata->quantity, 
                            'trial_ends_at' => null, 
                            'ends_at' => date('Y-m-d H:i:s', $session->current_period_end),
                        ]);
                    }
    
                    break;
                    case 'invoice.paid':
                        $invoice = $event->data->object;
                        $subscriptionId = $invoice->subscription;
                        $customerId = $invoice->customer;
                        $subscription = Subscription::where('stripe_id', $subscriptionId)->first();
                        if ($subscription) {
                            $subscription->update(['stripe_status' => 'paid']);
                        }
        
                        break;
                        case 'invoice.payment_failed':
                            $invoice = $event->data->object;
                            $subscriptionId = $invoice->subscription;
                            $customerId = $invoice->customer;
                            $subscription = Subscription::where('stripe_id', $subscriptionId)->first();
                            if ($subscription) {
                                $subscription->update([
                                    'stripe_status' => 'payment_failed', 
                                ]);
                            }
            
                            break;
        
                    
            
            }
            return response('Webhook handled successfully', 200);

        }
        private function updateSubscriptionTrialEndsAt($subscriptionId, $newTrialEndsAt)
         {
    
               //$subscription = Subscription::find($subscriptionId);
               $date = Carbon::parse($newTrialEndsAt)->format('Y-m-d H:i:s');
                 $subscription = DB::table('subscriptions')->where('stripe_id',$subscriptionId)->update([
                     'trial_ends_at' => $date,
                     'updated_at' => now()
                ]);
              // $subscription->trial_ends_at = $newTrialEndsAt;
              // $subscription->save();
              return $subscription;
          }
          private function scheduleTransitionToPaidSubscription($userId)
        {
                $user = User::find($userId);
            if ($user && $user->hasActiveFreeSubscription()) {
               $remainingDays = $user->getRemainingFreeTrialDays();
               $transitionDate = now()->addDays($remainingDays);
               Artisan::call('subscriptions:transition', ['user_id' => $userId], null, $transitionDate);
    }
}

           
        
}
