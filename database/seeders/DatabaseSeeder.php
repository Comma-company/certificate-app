<?php

namespace Database\Seeders;

use App\Models\FeaturePlan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusSeeder::class,
           CountrySeeder::class,
           BusinessTypeSeeder::class,
           CustomerTypeSeeder::class,
            PaymentTermsSeeder::class,
           FormSeeder::class,
            TaxSeeder::class,
            PlanSeeder::class,
            CategorySeeder::class,
            ElectricBoardSeeder::class,
            FeatureSeeder::class,
            FeaturePlanSeeder::class,
            NoteTypeSeeder::class,
            AttachmentTypeSeeder::class,
           ]);
    }
}
