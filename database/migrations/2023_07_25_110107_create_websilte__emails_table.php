<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('websilte__emails', function (Blueprint $table) {
            $table->id();
            $table->string('órder_email')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('account_status_email')->nullable();
            $table->string('support_email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websilte__emails');
    }
};
