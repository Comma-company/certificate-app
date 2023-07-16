<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Subscription;
use Stripe\Plan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class TransitionSubscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscriptions:transition';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user=Auth::guard('sanctum')->user();
        if($user){
            
        $paidSubscription = $user->subscriptions()->where('type', 'paid')->first();

        if ($paidSubscription) {
            $paidSubscription->activate();
           Log::info('User transitioned to paid subscription: ' . $user->id);
        }
    }
}
}

