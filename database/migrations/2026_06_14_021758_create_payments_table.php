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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('stall_id')->nullable();
            $table->integer('extension_id')->nullable();
            $table->integer('violation_id')->nullable();
            $table->enum('source_type', [
                'stall',
                'extension',
                'violation',
                'helper'
            ]);
            $table->decimal('amount', 10, 2);
            $table->enum('payment_status', [
                'Paid',
                'Unpaid',
                'Pending'
            ])->default('Pending');
            $table->timestamp('payment_date')->nullable();
            $table->string('receipt_path', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
