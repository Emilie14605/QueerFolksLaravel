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
            $table->id();
            $table->string('name', 20);
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 250);
            $table->string('firstname', 20)->default('');
            $table->string('surname', 20)->default('');
            $table->integer('age');
            $table->string('picture')->default('');
            $table->string('description', 250)->default('');
            $table->enum('gender', ['Homme Cisgenre', 'Femme Cisgenre', 'Homme Transgenre', 'Femme Transgenre', 'Genderfluid', 'Genderqueer', 'Agenre'])->default('Genderqueer');
            $table->enum('sexualorientation', ['Homosexuelle', 'Bisexuelle', 'Pansexuelle', 'Demi-sexuelle', 'Asexuelle', 'Heterosexuelle'])->default('Bisexuelle');
            $table->enum('romanticorientation', ['Homoromantique', 'Biromantique', 'Panromantique', 'Demi-romantique', 'Aromantique', 'Heteroromantique',])->default('Biromantique');
            $table->enum('lookingfor', ['Relation Amicale', 'Relation Romantique', 'Relation Sexuelle'])->default('Relation Amicale');
            $table->boolean('isAdmin')->default(false);
            $table->rememberToken();
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
