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
        Schema::create('stall_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('stall_id');
            $table->integer('user_id');
            $table->integer('rating');
            $table->text('comment')->nullable();
            $table->enum('comment_sentiment', ['Neutral', 'Positive', 'Negative', 'undefined'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stall_reviews');
    }
};
