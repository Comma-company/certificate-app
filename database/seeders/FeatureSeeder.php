<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;
class FeatureSeeder extends Seeder
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
                'name' => 'Unlimited creation and management of electrical certificates', 
                
            ],
            [
                'name'=>'Unlimited contacts',
            ],
            [
                'name'=>'Unlimited sites*',

            ],
            [
                'name'=>'Free certificate storage',
            ],
            [
                'name'=>'No long-term commitment required',
            ],
            [
                'name'=>' 2 Months Free',
            ],
            [
                'name'=>'Unlimited creation and management of gas certificates',

            ],
            [
                'name'=>'Unlimited creation and management of gas and electric certificates',
            ],
            [
                'name'=>'25% off the regular price plus two months free',
            ],
        ];
        foreach ($data as $key => $name) {
            Feature::create($name);
        }
    }
}
