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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['surf', 'windsurf', 'kayak', 'atv', 'hot air balloon']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('datetime');
            $table->boolean('paid')->default(false);
            $table->text('notes');
            $table->unsignedTinyInteger('satisfaction')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
