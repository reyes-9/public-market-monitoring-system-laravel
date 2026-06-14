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
        Schema::create('stalls', function (Blueprint $table) {
            $table->id();
            $table->integer('market_id');
            $table->integer('section_id');
            $table->integer('user_id');
            $table->string('stall_number', 11);
            $table->decimal('rental_fee', 10, 2);
            $table->string('stall_size', 50);
            $table->enum('payment_status', ['Paid', 'Unpaid', 'Pending', 'Overdue', 'Payment_Period']);
            $table->enum('status', ['available', 'occupied', 'maintenance', 'pending', 'expired', 'terminated', 'suspended']);
            $table->string('product', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stalls');
    }
};
