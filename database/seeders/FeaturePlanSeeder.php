<?php

namespace Database\Seeders;

use App\Models\FeaturePlan;
use Illuminate\Database\Seeder;

class FeaturePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'plan_id'=>3,
                'feature_id'=>1,
            ],
            [
                'plan_id'=>3,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>3,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>3,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>3,
                'feature_id'=>5,
            ],
            [
                'plan_id'=>4,
                'feature_id'=>1,
            ],
            [
                'plan_id'=>4,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>4,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>4,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>4,
                'feature_id'=>6,
            ],
            [
                'plan_id'=>5,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>5,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>5,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>5,
                'feature_id'=>5,
            ],
            [
                'plan_id'=>5,
                'feature_id'=>6,
            ],
            [
                'plan_id'=>6,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>6,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>6,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>6,
                'feature_id'=>6,
            ],
            [
                'plan_id'=>6,
                'feature_id'=>7,
            ],
            [
                'plan_id'=>7,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>7,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>7,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>7,
                'feature_id'=>5,
            ],
            [
                'plan_id'=>7,
                'feature_id'=>8,
            ],
            [
                'plan_id'=>8,
                'feature_id'=>2,
            ],
            [
                'plan_id'=>8,
                'feature_id'=>3,
            ],
            [
                'plan_id'=>8,
                'feature_id'=>4,
            ],
            [
                'plan_id'=>'8',
                'feature_id'=>8,
            ],
            [
                'plan_id'=>'8',
                'feature_id'=>9,
            ],
           

        ];
        foreach ($data as $key => $name) {
            FeaturePlan::create($name);
        }
        
    }
}
