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
        Schema::create('announcements', function (Blueprint $table) {
            $table->integer('id');
            $table->string('title', 255);
            $table->text('message');
            $table->dateTime('start_date');
            $table->dateTime('expiry_date');
            $table->enum('audience', ['all', 'vendors', 'admins']);
            $table->integer('created_by');
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcement');
    }
};
