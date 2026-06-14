<!-- COMPLETE ALL THE MIGRATIONS BY THIS DAY
COMPLETE ALL THE MIGRATIONS BY THIS DAY
COMPLETE ALL THE MIGRATIONS BY THIS DAY
COMPLETE ALL THE MIGRATIONS BY THIS DAY -->

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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('account_id');
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100);
            $table->string('alt_email', 100);
            $table->string('contact_no', 15);
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Divorced', 'Separated']);
            $table->string('nationality', 50);
            $table->text('address');
            $table->enum('user_type', ['Admin', 'Visitor', 'Vendor', 'Inspector']);
            $table->enum('status', ['active', 'inactive', 'terminated', 'blacklisted', 'suspended']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
