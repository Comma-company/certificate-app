<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->enum('type', ['note', 'form', 'user']);
            $table->unsignedBigInteger('type_id');
            $table->timestamps();
            $table->unique(['type', 'type_id']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_images');
    }
}