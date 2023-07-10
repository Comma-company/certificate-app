<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Electrical Certificates', 
                'stripe_plan' => 'price_1NSEnIE2sCQWSLCAuYftfKel', 
                'price' => 6.99, 
                'interval'=>'monthly',
                
            ],
            [
                'name' => 'Electrical Certificates', 
                'stripe_plan' => 'price_1NSEnvE2sCQWSLCA4qKRGbcm', 
                'price' => 69.99, 
                'interval'=>'yearly',
                
            ],
            [
                'name' => 'Gas', 
                'stripe_plan' => 'price_1NSEobE2sCQWSLCAADyyEHpA', 
                'price' => 6.99, 
                'interval'=>'monthly',
                
            ],
            [
                'name' => 'Gas', 
                'stripe_plan' => 'price_1NSEp5E2sCQWSLCAWst1M1Hp', 
                'price' =>69.99,
                'interval'=>'yearly', 
                
            ],
            [
                'name' => 'Gas & Electric', 
                'stripe_plan' => 'price_1NSEpyE2sCQWSLCAsIUdLcKg', 
                'price' =>10.49, 
                'interval'=>'monthly',
                
            ],
            [
                'name' => 'Gas & Electric', 
                'stripe_plan' => 'price_1NSEqcE2sCQWSLCA1WvNFme4', 
                'price' =>125.88,
                'interval'=>'yearly',
                
            ],
            [
                'name' => 'free', 
                'stripe_plan' => 'price_1NSEkhE2sCQWSLCAGK6joBPt', 
                'price' =>0.00,
                'interval'=>'monthly',
                
                
            ],



        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
    }

