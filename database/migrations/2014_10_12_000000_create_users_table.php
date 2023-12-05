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
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('birthdate');
            $table->unsignedBigInteger('specializations_id');
            $table->enum('role', ['Administrador', 'Profesor', 'Estudiante']);
            $table->timestamps();

            //Relation with specialization
            $table->foreign('specializations_id')->references('id')->on('specializations');
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
