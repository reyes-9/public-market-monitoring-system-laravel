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
        Schema::create('extensions', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('stall_id');
            $table->integer('application_id');
            $table->enum('duration', ['3 months', '6 months', '12 months']);
            $table->decimal('extension_cost', 10, 2);
            $table->enum('payment_status', ['Paid', 'Unpaid', 'Overdue', 'Payment_period']);
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extensions');
    }
};
