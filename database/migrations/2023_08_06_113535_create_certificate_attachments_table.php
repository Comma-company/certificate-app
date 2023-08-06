<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('certificate_attachments');
        
        Schema::create('certificate_attachments', function (Blueprint $table) {
            $table->id();
            $table->integer('certificate_id');
            $table->integer('image_id');
            $table->string('exclude')->nullable();
            $table->text('note_title')->nullable();
            $table->text('note_body')->nullable();
            $table->integer('attachment_type_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_attachments');
    }
}
