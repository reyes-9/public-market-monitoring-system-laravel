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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('application_number', 255);
            $table->integer('account_id');
            $table->integer('stall_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('market_id')->nullable();
            $table->enum('application_type', [
                'stall',
                'stall transfer',
                'stall extension',
                'helper',
                'stall succession'
            ]);
            $table->string('products', 255)->nullable();
            $table->integer('helper_id')->nullable();
            $table->integer('extension_id')->nullable();
            $table->enum('status', [
                'Submitted',
                'Under Review',
                'Approved',
                'Rejected',
                'Withdrawn'
            ])->default('Submitted');
            $table->string('rejection_reason', 255)->nullable();
            $table->integer('reviewing_admin_id')->nullable();
            $table->integer('reviewed_by')->nullable();
            $table->timestamp('reviewed_at')->nullable();
            $table->integer('inspector_id')->nullable();
            $table->date('inspection_date')->nullable();
            $table->enum('inspection_status', [
                'Approved',
                'Rejected',
                'Pending',
                'Scheduled'
            ])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
