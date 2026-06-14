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
            $table->integer('id');
            $table->string('application_number', 255);
            $table->integer('account_id');
            $table->integer('stall_id');
            $table->integer('section_id');
            $table->integer('market_id');
            $table->enum('application_type', ['stall', 'stall transfer', 'stall extension', 'helper', 'stall succession']);
            $table->string('products', 255);
            $table->integer('helper_id');
            $table->integer('extension_id');
            $table->enum('status', ['Submitted', 'Under Review', 'Approved', 'Rejected', 'Withdrawn']);
            $table->string('rejection_reason', 255);
            $table->integer('reviewing_admin_id');
            $table->integer('reviewed_by');
            $table->timestamp('reviewed_at');
            $table->integer('inspector_id');
            $table->date('inspection_date');
            $table->enum('inspection_status', ['Approved', 'Rejected', 'Pending', 'Scheduled']);
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
