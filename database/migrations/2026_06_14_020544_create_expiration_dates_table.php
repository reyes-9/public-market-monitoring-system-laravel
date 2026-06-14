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
        Schema::create('expiration_dates', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('application_id');
            $table->integer('reference_id');
            $table->enum('type', ['stall', 'extension', 'helper', 'violation']);
            $table->date('expiration_date');
            $table->enum('status', ['active', 'expired', 'payment_period', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expiration_dates');
    }
};
