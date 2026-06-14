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
            $table->string('evidence_image_path', 255)->nullable();
            $table->date('violation_date');
            $table->enum('status', [
                'Pending',
                'Resolved',
                'Dismissed',
                'Deleted',
                'Escalated'
            ])->default('Pending');
            $table->dateTime('suspension_started')->nullable();
            $table->dateTime('suspension_end')->nullable();
            $table->enum('payment_status', [
                'Paid',
                'Unpaid',
                'Pending',
                'Overdue',
                'Payment_Period'
            ])->default('Pending');
            $table->text('appeal_text')->nullable();
            $table->text('appeal_document_path')->nullable();
            $table->dateTime('appeal_submitted_at')->nullable();
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
