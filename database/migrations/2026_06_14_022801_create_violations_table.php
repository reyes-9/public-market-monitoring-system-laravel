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
        Schema::create('violations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('stall_id');
            $table->integer('violation_type_id');
            $table->text('violation_description');
            $table->string('evidence_image_path', 255);
            $table->date('violation_date');
            $table->enum('status', ['Pending', 'Resolved', 'Dismissed', 'Deleted', 'Escalated']);
            $table->dateTime('suspension_started');
            $table->dateTime('suspension_end');
            $table->enum('payment_status', ['Paid', 'Unpaid', 'Pending', 'Overdue', 'Payment_Period']);
            $table->text('appeal_text');
            $table->text('appeal_document_path');
            $table->dateTime('appeal_submitted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violations');
    }
};
