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
        Schema::create('enrollment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('students_id');
            $table->timestamps();

            // Relations
            $table->foreign('courses_id')->references('id')->on('courses');
            $table->foreign('students_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
