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
        Schema::create('vendor_applications', function (Blueprint $table) {
            $table->id();

            $table->integer('account_id');

            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->string('email', 255);
            $table->string('alt_email', 255)->nullable();
            $table->string('contact_no', 20);
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->enum('civil_status', [
                'Single',
                'Married',
                'Divorced',
                'Widowed'
            ]);
            $table->string('nationality', 255)->default('Filipino');
            $table->text('address');
            $table->enum('application_status', [
                'Pending',
                'Approved',
                'Rejected'
            ])->default('Pending');
            $table->timestamp('application_date')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->dateTime('status_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_applications');
    }
};
