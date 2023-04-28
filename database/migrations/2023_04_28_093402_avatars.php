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
        Schema::create('avatar', function(Blueprint $table)
        {
            $table->id();
            $table->unsignedBigInteger('avatar_user_id');
            $table->foreign('avatar_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar_place', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
