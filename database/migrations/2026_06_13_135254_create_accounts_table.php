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
            $table->id();
            $table->string('email', 255);
            $table->string('password', 255);
            $table->enum('user_type', ['Visitor', 'Admin', 'Vendor', 'Inspector']);
            $table->string('otp_code', 6)->nullable();
            $table->dateTime('otp_expiry')->nullable();
            $table->integer('is_verified')->default(0);
            $table->integer('otp_sent_count')->default(0);
            $table->dateTime('last_otp_sent')->nullable();
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
