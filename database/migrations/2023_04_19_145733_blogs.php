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
        //
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 20);
            $table->string('author');
            $table->string('content', 250)->default('');
            $table->unsignedBigInteger('post_user_id');
            $table->foreign('post_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('blogs');
    }
};
