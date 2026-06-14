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
        Schema::create('stall_transfers', function (Blueprint $table) {
            $table->id();
            $table->integer('current_owner_id');
            $table->integer('deceased_owner_id');
            $table->integer('application_id');
            $table->enum('transfer_type', ['Transfer', 'Succession']);
            $table->text('transfer_reason');
            $table->integer('recipient_id');
            $table->enum('transfer_confirmation_status', ['Pending', 'Approved', 'Rejected']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stall_transfers');
    }
};
