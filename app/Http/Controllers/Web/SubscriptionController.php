<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialRemainingDaysNotification;
use App\Notifications\TrialEndNotification;
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

       //$user= Auth::user();
      // $plans = Plan::all();
       //$currentPlan=$user->subscription($request->plan)->stripe_plan;
        return view('plan', [
        //'plans' => $plans,
           //'currentPlan'=>$currentPlan,
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
                  $this->updateSubscriptionTrialEndsAt($subscriptionId, $newTrialEndsAt);
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
            
            }
            return response('Webhook handled successfully', 200);

        }
        private function updateSubscriptionTrialEndsAt($subscriptionId, $newTrialEndsAt)
         {
    
               $subscription = Subscription::find($subscriptionId);
               $subscription->trial_ends_at = $newTrialEndsAt;
               $subscription->save();
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
