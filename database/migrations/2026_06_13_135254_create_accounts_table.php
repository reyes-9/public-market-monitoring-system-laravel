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
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('id');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->enum('user_type', ['Visitor', 'Admin', 'Vendor', 'Inspector']);
            $table->string('otp_code', 6);
            $table->dateTime('otp_expiry');
            $table->integer('is_verified');
            $table->integer('otp_sent_count');
            $table->dateTime('last_otp_sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
