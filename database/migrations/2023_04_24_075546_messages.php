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
        Schema::create('messages', function(Blueprint $table)
        {
            $table->id();
            $table->unsignedBigInteger('messages_sender_id');
            $table->foreign('messages_sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('messages_receiver_id');
            $table->foreign('messages_receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content', 250)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('messages');
    }
};
