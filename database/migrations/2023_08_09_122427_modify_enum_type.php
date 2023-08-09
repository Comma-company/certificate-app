<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ModifyEnumType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE contacts MODIFY COLUMN type enum('siteManager', 'landlord', 'agent')");
        DB::statement("ALTER TABLE site_contacts MODIFY COLUMN type enum('director', 'siteManager', 'landlord', 'agent', 'financeManager', 'tenant')");

        // DB::statement("ALTER TABLE contacts MODIFY COLUMN type enum('agent','landlord','siteManager')");
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE contacts MODIFY COLUMN type enum('landlord', 'agent')");
        DB::statement("ALTER TABLE site_contacts MODIFY COLUMN type enum('director', 'siteManager', 'landlord', 'agent', 'financeManager', 'tenant')");
    }
}
