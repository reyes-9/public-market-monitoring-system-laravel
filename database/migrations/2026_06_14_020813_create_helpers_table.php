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
        Schema::create('helpers', function (Blueprint $table) {
            $table->id();
            $table->integer('stall_id');
            $table->integer('stall_owner_id');
            $table->string('first_name', 255);
            $table->string('middle_name', 50);
            $table->string('last_name', 255);
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->string('email', 255);
            $table->string('alt_email', 255);
            $table->string('phone_number', 15);
            $table->string('civil_status', 50);
            $table->string('nationality', 100);
            $table->text('address');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helpers');
    }
};
