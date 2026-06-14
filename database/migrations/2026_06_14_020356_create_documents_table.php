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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('document_name', 255);
            $table->string('document_type', 255);
            $table->string('document_path', 255);
            $table->enum('status', ['Valid', 'Rejected', 'Pending',])->default('Pending');
            $table->string('rejection_reason', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
